<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;



class CreateAnnouncement extends Component
{
   use WithFileUploads;
   
   public $announcement;
    public $title;
    public $body;
    public $price;
    public $category_id;
    public $temporary_images = [];
    public $images = [];
    public $image;

    
    protected $rules=[
        'title'=>'required',
        'body'=>'required',
        'price'=>'required',
        'category_id'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024',
    ];


    protected $message= [
        'required' => 'il campo: attribute e richiesto',
        'min' => 'il campo: attribute e troppo corto',
        'temporary_images.*.image' => 'i file devono essere immagini',
        'temporary_images.*.max' => 'l\'immagine dev\'essere massimo di 1mb',
        'imaages.image' => 'l\'immagine dev\'essere un\'immagine',
        'images.max' => 'l\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages() {

        if($this->validate ([
            'temporary_images.*'=> 'image|max:1024',
        ])) {

            foreach ($this->temporary_images as $image) {
                $this->images[]= $image;
            } 

        }

    }


    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    



    public function store(){
        
        $this->validate();

        $category=Category::find($this->category_id);
        $this->announcement = $category->announcements()->create($this->validate());
        $this->announcement->user()->associate(Auth::user()->id);
        $this->announcement->save();
        if(count($this->images)){
            foreach ($this->images as $image){
                // $newImage = $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
                
                $newFileName = "announcement/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName, 'public')]);
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 400, 300),
    
                    // riga per verifica google vision
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);
            }
            // File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }


        session()->flash('message', 'articolo inserito con sucesso, sara publico dopo la revisione');
        $this->cleanForm();
    }



    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

   

    public function cleanForm(){
        $this->title = '';
        $this->body = '';
        $this->category_id = '';
        $this->images = [];
        $this->temporary_images = [];
    }    

    public function render()
    {
        return view('livewire.create-announcement');
    }
}

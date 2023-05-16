<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
   use WithFileUploads;
    public $title;
    public $body;
    public $price;
    public $category_id;
    public $photo;

    
    protected $rules=[
        'title'=>'required',
        'body'=>'required',
        'price'=>'required',
        'category_id'=>'required',
    ];

    

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();
    Announcement::create([
        'user_id'=>Auth::user()->id,
        'category_id'=>$this->category_id,
        'title'=>$this->title,
        'body'=>$this->body,
        'price'=>$this->price,
        // 'photo'=>$this->photo->store('photos'),
        'photo'=>null,
       
    ]);
    $this->reset();
    session()->flash('message', 'annucio inserito');
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}

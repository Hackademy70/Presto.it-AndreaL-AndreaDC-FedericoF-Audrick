<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;


    protected $rules=[
        'title'=>'required',

    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function store(){
        $this->validate();
    Announcement::create([
        'user_id'=>Auth::user()->id,
        'title'=>$this->title,
        'body'=>$this->body,
        'price'=>$this->price,
    ]);
    $this->reset();
    session()->flash('message', 'annucio inserito');
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}

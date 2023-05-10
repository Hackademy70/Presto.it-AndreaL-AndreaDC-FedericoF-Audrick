<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

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
        'title'=>$this->title,
        'body'=>$this->body,
        'price'=>$this->price,
    ]);
    $this->reset();
    }

    public function render()
    {
        return view('livewire.create-announcement')->with('message', 'annucio inserito');
    }
}

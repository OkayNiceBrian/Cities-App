<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Playground extends Component
{
    public $count = 0;
    public $message = "";
    protected $updatesQueryString = ["message" => ['except' => '']];

    public function mount(){
        $this->message = request()->query('message', $this->message);
    }

    public function increment(){
        $this->count++;
    }

    public function decrement(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.playground');
    }
}

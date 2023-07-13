<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{

    public $name = 'Alex';
    public $loud = false;
    // public $greeting = 'Hello';
    public $greeting = ['Hello'];


    public function resetName($name = "Bingo")
    {
        // $this->name = 'Bingo';
        $this->name = $name;
    }

    public function render()
    {

        return view('livewire.hello-world');
        // $data = ["name" => "Zihad", "email" => "dev@gmail.com"];
        // return view('livewire.hello-world', $data);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld2 extends Component
{
    public $name = "Alex";

    public function render()
    {
        return view('livewire.hello-world2');
    }
}

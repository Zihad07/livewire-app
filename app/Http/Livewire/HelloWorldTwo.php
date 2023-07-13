<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorldTwo extends Component
{
    public $name = "Alex";

    // first run
    public function mount(Request $request, $name)
    {
        // $this->name = "Chnage";

        $this->name = $request->input('name', $name);
    }
    // second run
    public function hydrate()
    {
    }

    // thir run
    public function updated()
    {
        // $this->name = strtoupper($this->name);
    }
    // public function updatedName($name)
    // {
    //     $this->name = strtoupper($name);
    // }
    public function render()
    {
        return view('livewire.hello-world-two');
    }
}

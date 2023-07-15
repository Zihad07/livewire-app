<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $email;
    public $status;
    public $outer_id;
    public $message_show;

    function mount()
    {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
        $this->status = false;
        $this->message_show = false;

        // $this->outer_id = request('id', null);
    }

    // update Hooks

    public function updatedName($value)
    {
        $this->validate(['name' => ['min:3']]);

        // $this->name = strtoupper($value);
    }

    public function render()
    {
        return view('livewire.profile');
    }

    public function updateProfile()
    {

        $data = $this->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email']
        ]);

        auth()->user()->update($data);

        $this->status = true;
    }

    function checkName()
    {

        $this->validate(['name' => ['min:3']]);
    }
}

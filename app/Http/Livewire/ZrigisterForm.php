<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class ZrigisterForm extends Component
{
    public $email = '';
    public $password = '';
    public $passowrdConfirmation = '';

    public function register()
    {
        $data = $this->validate([
            'email' => 'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        User::create([
            'email' => $data['email'],
            'password'=> Hash::make($data['password']),
            'name' => $data['email'],
        ]);
        // dd($data);

        return redirect()->route('register.done');
    }
    public function render()
    {
        return view('livewire.zrigister-form');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login')->layout('layouts.app');
    }

    protected $rules = [
        'email' => 'required',
        'password' => 'required'
    ];

    public function save(){
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect(route('my.post'));
        } else {
            $this->dispatchBrowserEvent('swal:modal',[
                'type' => 'warning',
                'message' => 'Email or password is wrong',
                'text' => 'Try Again! We cant find data from database'
            ]);
        }
    }
}

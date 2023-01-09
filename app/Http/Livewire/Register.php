<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;
use App\Models\User;
class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.register');
    }
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];
    public function save(){
        $this->validate();
        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        $this->user = "";
        $this->email = "";
        $this->password = "";
    }
}

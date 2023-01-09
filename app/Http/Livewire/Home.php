<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\post;
class Home extends Component
{
    public $title;
    public $description;
    public $post;

    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];

    public function mount(){
        $this->post = post::latest()->first();
    }
    
    public function single($id){
        $this->post = post::find($id);
    }

    public function render()
    {
        $posts = post::orderby('id','desc')->get();
        $data = $this->post;
        return view('livewire.home',compact('posts','data'))->layout('layouts.app');
    }
}

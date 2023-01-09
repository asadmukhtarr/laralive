<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\post;
use Auth;

class Mypost extends Component
{
    public $title;
    public $description;
    public $post;

    protected $rules = [
        'title' => 'required',
        'description' => 'required'
    ];
    public function delete($id){
        $post = post::find($id);
        $post->delete();
        $this->dispatchBrowserEvent('swal:del',[
            'type' => 'danger',
            'message' => 'Post Deleted Successfully',
            'text' => 'It Will Be Deleted From Database post table'
        ]);
    }

    public function save(){
        $this->validate();
        $post = new post;
        $post->title = $this->title;
        $post->description =$this->description;
        $post->user_id =Auth::id();
        $post->save();
        $this->dispatchBrowserEvent('swal:modal',[
            'type' => 'success',
            'message' => 'Post Saved Successfully',
            'text' => 'It Will Be Saved In Database post table'
        ]);
        $this->title = " ";
        $this->description =" ";

    }

    public function mount(){
        $this->post = post::where('user_id',Auth::id())->first();
    }
    
    public function single($id){
        $this->post = post::where('user_id',Auth::id())->where('id',$id)->first();
    }

    public function render()
    {
        $posts = post::where('user_id',Auth::id())->orderby('id','desc')->get();
        $data = $this->post;
        return view('livewire.mypost',compact('posts','data'));
    }
}

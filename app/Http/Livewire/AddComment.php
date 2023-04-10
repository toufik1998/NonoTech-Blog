<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class AddComment extends Component
{
    public $postId;
    public $comment;
    public $errorMessage;

    protected $rules = [
        'comment' => 'required|min:5|max:500',
    ];

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function addComment()
    {
        $this->validate();

        $comment = new Comment;
        $comment->post_id = $this->postId;
        $comment->user_id = auth()->user()->id;
        $comment->comment = $this->comment;
        $comment->save();

        $this->comment = '';
        $this->emit('commentAdded');
    }

    

    public function render()
    {
        return view('livewire.add-comment');
    }
}


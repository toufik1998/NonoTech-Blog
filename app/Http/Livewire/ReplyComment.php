<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ReplyComment extends Component
{
    public $commentId;
    public $postId;
    public $reply;

    public function mount($commentId, $postId)
    {
        $this->commentId = $commentId;
        $this->postId = $postId;
    }

    public function render()
    {
        return view('livewire.reply-comment');
    }

    public function save()
    {
        $this->validate([
            'reply' => 'required|min:5',
        ]);

        Comment::create([
            'comment' => $this->reply,
            'post_id' => $this->postId,
            'comment_id' => $this->commentId,
            'user_id' => auth()->id(),
        ]);

        $this->reply = '';

        $this->emit('commentAdded');
    }
}

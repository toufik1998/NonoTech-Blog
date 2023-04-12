<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Reply;
use Livewire\Component;

class AddReply extends Component
{
    public $commentId;
    public $postId;
    public $reply;
    public $parent_id;
    public $showForm = true;



    protected $rules = [
        'reply' => 'required',
    ];

    public function mount($commentId, $postId)
    {
        $this->commentId = $commentId;
        $this->postId = $postId;
        $this->reply = $this->reply ?? '';
    }

    public function render()
    {
        return view('livewire.add-reply');
    }

    public function store()
    {
        $this->validate();

        $comment = Comment::find($this->commentId);

        $reply = Reply::create([
            'reply' => $this->reply,
            'comment_id' => $comment->id,
            'user_id' => auth()->user()->id
        ]);

        $reply->comment_id = $reply->id;
        $comment->save();


        $this->reset(['reply']);

        $this->emit('replyAdded');
        $this->reset('reply');

    }
}

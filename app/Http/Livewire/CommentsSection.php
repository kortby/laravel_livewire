<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class CommentsSection extends Component
{
    public Post $post;
    public $comment;
    public $flash_message;

    protected $rules = [
        'comment' => 'required|min:4',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function postComment()
    {
        $this->validate();

        Comment::create([
            'post_id' => $this->post->id,
            'username' => 'Guest',
            'content' => $this->comment,
        ]);

        $this->post = Post::find($this->post->id);

        $this->comment = '';

        $this->flash_message = 'Comment was posted';
    }

    public function render()
    {
        return view('livewire.comments-section');
    }
}

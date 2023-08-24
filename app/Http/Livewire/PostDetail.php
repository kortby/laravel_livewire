<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostDetail extends Component
{
    public $post;

    public $title;

    public $description;

    public function mount(Post $post)
    {
        $this->post = $post;

        // $this->fill(
        //     $post->only('title', 'content'),
        // );
    }

    public function render()
    {
        return view('livewire.post-detail', [
            'post' => $this->post
        ]);
    }
}

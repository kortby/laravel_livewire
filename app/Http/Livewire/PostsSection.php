<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostsSection extends Component
{

    public function render()
    {
        return view('livewire.posts-section', ['posts' => Post::all()]);
    }
}

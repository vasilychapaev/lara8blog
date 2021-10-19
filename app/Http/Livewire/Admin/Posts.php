<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;

    public function render()
    {
        $this->posts = Post::all();

        return view('livewire.admin.posts');
    }
}

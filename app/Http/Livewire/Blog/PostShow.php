<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class PostShow extends Component
{
    public $post;

    public function mount($slug = '')
    {
        $this->post = Post::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {

        return view('livewire.blog.post-show')
            ->layout('livewire.blog.layout');
    }
}

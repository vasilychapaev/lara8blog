<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $categories;
    public $posts;

    public function render()
    {
        $this->categories = Category::all();
        $this->posts = Post::all();

        return view('livewire.blog.category')
            ->layout('livewire.blog.layout');
    }
}

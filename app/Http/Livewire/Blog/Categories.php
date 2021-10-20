<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

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

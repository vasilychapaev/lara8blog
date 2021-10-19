<?php

namespace App\Http\Livewire\Blog;

use App\Models\Category;
use Livewire\Component;

class CategoryShow extends Component
{
    public $category;

    public function mount($slug = '')
    {
        $this->category = Category::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.blog.category-show')
            ->layout('livewire.blog.layout');
    }
}

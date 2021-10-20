<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryEdit extends Component
{
    public $category;
    public $title;
    public $slug;

    public function mount($id)
    {
        $this->category = Category::find($id);
//        $this->title = $this->ca
    }

    public function render()
    {
        return view('livewire.admin.category-edit');
    }
}

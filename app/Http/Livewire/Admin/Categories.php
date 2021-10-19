<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
//        $this->categories = Category::paginate(2);

        return view('livewire.admin.categories');
    }
}

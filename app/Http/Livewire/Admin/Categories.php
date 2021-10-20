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

    public function editCategory($id = 0)
    {
        return redirect()->route('lw.admin.category.edit', $id);
    }

    public function deleteCategory($id = 0)
    {
        Category::destroy($id);
        session()->flash('message', "Category {$id} was deleted");

        return redirect()->route('lw.admin.categories.list');
    }
}

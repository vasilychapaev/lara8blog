<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
//    public $categories;
    public $category;
    public $editTitle;

    public function render()
    {
//        $this->categories = Category::all();
        $categories = Category::paginate(2);

        return view('livewire.admin.categories', compact('categories'));
    }

    public function editCategory($id = 0)
    {
//        return redirect()->route('lw.admin.category.edit', $id);
        $this->category = Category::find($id);
        $this->editTitle = $this->category->title;
        $this->emit('toggleModelView', ['classModalView' => '#addCategory']);

    }

    public function storeCategory()
    {
        $this->validate([
            'editTitle' => 'required|string'
        ]);
        $this->category->title = $this->editTitle;
        $this->category->save();

        $this->emit('toggleModelView', ['classModalView' => '#addCategory']);
    }

    public function deleteCategory($id = 0)
    {
        Category::destroy($id);
        session()->flash('message', "Category {$id} was deleted");

        return redirect()->route('lw.admin.categories.list');
    }

    public function categoryAdd()
    {

    }
}

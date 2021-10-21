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
        $this->title = $this->category->title;
        $this->slug = $this->category->slug;
    }

    public function render()
    {
        return view('livewire.admin.category-edit');
    }

    public function submit()
    {
        $this->category->fill([
            'title' => $this->title,
        ]);
        $this->category->save();

//        session()->flash('message', 'category updated');
        // ❓ работает 1 раз

        dd('444');
        return redirect()->route('lw.admin.categories.list');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class CategoryAdd extends Component
{
    public $title;
    public $slug;

    protected $rules = [
        'title' => 'required',
//        'slug' => 'required'
    ];

    public function render()
    {
        return view('livewire.admin.category-add');
    }

    public function submit()
    {
        $data = $this->validate();
        Category::create($data);

        session()->flash('message', 'Category successfully created');
        return redirect()->route('lw.admin.categories.list');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Http\Request;
use Livewire\Component;

class CategoryAdd extends Component
{
    public $title;
    public $slug;

    public function render()
    {
        return view('livewire.admin.category-add');
    }

    public function add(Request $request)
    {
        dd($request);
    }
}

<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;

class Tags extends Component
{
    public $tags;

    public function render()
    {
        $this->tags = Tag::all();

        return view('livewire.admin.tags');
    }
}

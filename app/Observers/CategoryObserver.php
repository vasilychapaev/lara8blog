<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    public function created(Category $category)
    {
        $category->slug = Str::slug($category->title);
        $category->save();
    }

    public function updated(Category $category)
    {
        $this->work($category);
    }

    private function work($category)
    {
        $category->slug = Str::slug($category->title);
        $category->save();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug = '')
    {
        $category = Category::where('slug', $slug)->firstOrFail();
//        $posts = $category->posts;
        $posts = $category->posts()->orderBy('id', 'desc')->paginate(5);

        return view('bootstrap.blog.category', compact('category', 'posts'));
    }
}

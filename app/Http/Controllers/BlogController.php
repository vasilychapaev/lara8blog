<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::paginate(3);
        return view('bootstrap.blog.main', compact('posts'));
    }

    public function show(Request $request, $slug = '')
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views++;
        $post->update();
        return view('bootstrap.blog.post', compact('post'));
    }
}

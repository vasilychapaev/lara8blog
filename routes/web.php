<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index');


require __DIR__ . '/auth.php';


Route::prefix('/bootstrap')->group(function () {
    Route::get('/', function () {
        return view('bootstrap.admin.dashboard');
    })->name('bootstrap.admin.dashboard');
    Route::get('table', function () {
        return view('bootstrap.admin.table');
    })->name('bootstrap.admin.table');
    Route::get('form', function () {
        return view('bootstrap.admin.form');
    })->name('bootstrap.admin.form');

    Route::get('blog', function () {
        return view('bootstrap.blog.main');
    })->name('bootstrap.blog.main');
    Route::get('blog/post', function () {
        return view('bootstrap.blog.post');
    })->name('bootstrap.blog.post');
    Route::get('blog/category', function () {
        return view('bootstrap.blog.category');
    })->name('bootstrap.blog.category');
});


Route::get('/', 'App\Http\Controllers\BlogController@index')->name('home');
Route::get('/post/{slug}/', 'App\Http\Controllers\BlogController@show')->name('post');
Route::get('/category/{slug}/', 'App\Http\Controllers\CategoryController@show')->name('category');
Route::get('/tag/{slug}/', 'App\Http\Controllers\TagController@show')->name('tag');
Route::get('/search/{q}/', 'App\Http\Controllers\SearchController@search')->name('search');
Route::get('/contact/', 'App\Http\Controllers\ContactControlller@index')->name('contact');



// livewire
Route::prefix('/lw')->name('lw.')->group(function () {

    Route::prefix('/blog')->name('blog.')->group(function() {
        Route::get('/', \App\Http\Livewire\Blog\Categories::class)->name('category.main');
        Route::get('/category/{slug}/', \App\Http\Livewire\Blog\CategoryShow::class)->name('category.show');
        Route::get('/post/{slug}/', \App\Http\Livewire\Blog\PostShow::class)->name('post.show');
        Route::get('/contact-form/', \App\Http\Livewire\Blog\ContactForm::class)->name('contact-form');
    });

    Route::prefix('/admin')->name('admin.')->group(function () {
        Route::get('/', \App\Http\Livewire\Admin\Dashboard::class)->name('dashboard');
        Route::get('/categories', \App\Http\Livewire\Admin\Categories::class)->name('categories.list');
//        Route::get('/categories/add/', \App\Http\Livewire\Admin\CategoryAdd::class)->name('category.add');
        Route::get('/categories/add/', [\App\Http\Livewire\Admin\Categories::class, 'categoryAdd'])->name('category.add');
        Route::get('/categories/edit/{id}/', \App\Http\Livewire\Admin\CategoryEdit::class)->name('category.edit');
        Route::get('/tags', \App\Http\Livewire\Admin\Tags::class)->name('tags.list');
        Route::get('/tags/add/', \App\Http\Livewire\Admin\Tags::class)->name('tag.add');
        Route::get('/posts', \App\Http\Livewire\Admin\Posts::class)->name('posts.list');
        Route::get('/posts/add/', \App\Http\Livewire\Admin\Posts::class)->name('post.add');
    });
});


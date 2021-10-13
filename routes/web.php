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


require __DIR__.'/auth.php';


Route::prefix('/bootstrap')->group(function(){
    Route::get('/', function() {
        return view('bootstrap.admin.dashboard');
    })->name('bootstrap.admin.dashboard');
    Route::get('table', function() {
        return view('bootstrap.admin.table');
    })->name('bootstrap.admin.table');
    Route::get('form', function() {
        return view('bootstrap.admin.form');
    })->name('bootstrap.admin.form');

    Route::get('blog', function() {
        return view('bootstrap.blog.main');
    })->name('bootstrap.blog.main');
    Route::get('blog/post', function() {
        return view('bootstrap.blog.post');
    })->name('bootstrap.blog.post');
    Route::get('blog/category', function() {
        return view('bootstrap.blog.category');
    })->name('bootstrap.blog.category');
});


Route::get('/', 'App\Http\Controllers\BlogController@index')->name('home');
Route::get('/post/{slug}/', 'App\Http\Controllers\BlogController@show')->name('post');
Route::get('/category/{slug}/', 'App\Http\Controllers\CategoryController@show')->name('category');
Route::get('/tag/{slug}/', 'App\Http\Controllers\TagController@show')->name('tag');
Route::get('/search/{q}/', 'App\Http\Controllers\SearchController@search')->name('search');
Route::get('/contact/', 'App\Http\Controllers\ContactControlller@index')->name('contact');





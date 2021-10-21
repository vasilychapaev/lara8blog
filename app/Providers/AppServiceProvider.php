<?php

namespace App\Providers;

use App\Models\Category;
use App\Observers\CategoryObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('bootstrap.blog.sidebar', function($view) {
            $view->with('categories_sidebar', Category::get());
        });

        Paginator::useBootstrap();

//        Category::observe(CategoryObserver::class);
    }
}

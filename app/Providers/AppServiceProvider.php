<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Content;
use App\MainContent;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.front', 'pages.homepage'], function($view){
            // categories
            $view->with('categories', Category::orderBy('order', 'asc')->get());
            
            // contents by categories
            $view->with('contentsByCategories', Category::with(['contents' => function ($query) {
                $query->take(2);
            }])->get());

            // Most readed contents
            $date = Carbon::now()->subDay(1)->toDateTimeString();            
            $view->with('mostRead', Content::where('created_at', '>', $date)->orderBy('show', 'asc')->take(10)->get());

        });


        view()->composer(['pages.homepage'], function($view){
            // main contents | headers news
            $view->with('mainContents', MainContent::with('content')->orderBy('order', 'asc')->take(5)->get());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Content;
use App\MainContent;
use Carbon\Carbon;
use App\Adsection;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.front', 'pages.homepage', 'pages.content-detail'], function($view){
            // categories
            $view->with('categories', Category::orderBy('order', 'asc')->get());
            
            // contents by categories
            $view->with('contentsByCategories', Category::with(['contents' => function ($query) {
                $query->take(10);
            }])->get());

            // most readed contents
            $date = Carbon::now()->subDay(2)->toDateTimeString();            
            $view->with('mostRead', Content::where('created_at', '>', $date)->orderBy('show', 'asc')->take(10)->get());

            // get ads
            $ads = Adsection::where('status', true)->get();
            $adSections = [];
            // filter ads by sections
            for ($i=1; $i < 5; $i++) { 
                $filtered = $ads->filter(function ($item) use($i) {
                    return $item->section == "section".$i;
                });
                // add ads to sections array
                $adSections['section'.$i] = $filtered->first();
            }
            $view->with('adSections', $adSections);

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

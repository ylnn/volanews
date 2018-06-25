<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use Carbon\Carbon;


class HomeController extends Controller 
{
    public function index()
    {
        $categories = Category::orderBy('order', 'asc')->get();

        $contentsByCategories = Category::with(['contents' => function ($query) {
            $query->take(2);
        }])->get();

        $date = Carbon::now()->subDay(1)->toDateTimeString();

        $mostRead = Content::where('created_at', '>', $date)->orderBy('show', 'asc')->take(10)->get();

        return view('pages.homepage', compact('categories', 'contentsByCategories', 'mostRead'));
    } 
}

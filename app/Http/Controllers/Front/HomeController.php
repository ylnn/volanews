<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Category;
use App\Content;


class HomeController extends Controller 
{
    public function index()
    {
        $categories = Category::orderBy('order', 'asc')->get();

        $contentsByCategories = Category::with('contents')->get();

        return view('pages.homepage', compact('categories', 'contentsByCategories'));
    } 
}

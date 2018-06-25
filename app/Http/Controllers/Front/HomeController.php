<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Category;


class HomeController extends Controller 
{
    public function index()
    {
        $categories = Category::orderBy('order', 'asc')->get();
        return view('pages.homepage', compact('categories'));
    } 
}

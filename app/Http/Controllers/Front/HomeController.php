<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Category;
use App\Content;
use Carbon\Carbon;
use App\MainContent;


class HomeController extends Controller 
{
    public function index()
    {
        return view('pages.homepage');
    } 

    public function category(Category $category)
    {
        $contents = $category->contents()->paginate(2);
        return view('pages.category-detail', compact('category', 'contents'));
    }

    public function content(Content $content)
    {
        return view('pages.content-detail', compact('content'));
    }
}

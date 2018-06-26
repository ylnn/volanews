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
        $title = $category->title;
        return view('pages.category-detail', compact('category', 'contents', 'title'));
    }

    public function content(Content $content)
    {
        $title = $content->title;
        return view('pages.content-detail', compact('content', 'title'));
    }
}

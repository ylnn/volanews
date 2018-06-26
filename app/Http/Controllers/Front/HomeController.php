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
}

<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function leadership()
    {
        return view('pages.leadership');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function workCulture()
    {
        return view('pages.workculture');
    }

    public function whyMilestone()
    {
        return view('pages.whymilestone');
    }
    
}
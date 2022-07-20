<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Home";
        return view('home.index', compact('title'));
    }

    public function about()
    {
        $title = "About";
        return view('home.about', compact('title'));
    }

    public function contact()
    {
        $title = "Contact";
        return view('home.contact', compact('title'));
    }

    public function news()
    {
        $title = "News";
        return view('home.news', compact('title'));
    }

    public function smartcam()
    {
        $title = "Technology";
        return view('home.smartcam', compact('title'));
    }

    public function smartmap()
    {
        $title = "Technology";
        return view('home.smartmap', compact('title'));
    }
}

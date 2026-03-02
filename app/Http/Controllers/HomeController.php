<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Home page
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        return view('home.home');
    }

    /**
     * About page
     * @return \Illuminate\View\View
     */
    public function about(): View
    {
        return view('home.about');
    }
}

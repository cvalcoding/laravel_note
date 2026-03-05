<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Home page
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        // dd(Auth::check());
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

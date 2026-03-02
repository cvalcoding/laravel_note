<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Login View
     * @return \Illuminate\View\View
     */
    public function loginView(): View
    {
        return view('auth.login');
    }

    /**
     * Register view
     * @return \Illuminate\View\View
     */
    public function registerView(): View
    {
        return view('auth.register');
    }
}

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
Route::get('/register', [AuthController::class, 'registerView'])->name('registerView');

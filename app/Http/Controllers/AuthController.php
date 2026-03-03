<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
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
     * login request
     * @return RedirectResponse
     */
    public function login(AuthRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            $user = User::where('email', '=', $request['email'])->firstOrFail();
            $user->tokens()->delete();
            $user->createToken('auth_token', ['note:gestion']);
            return redirect('/', 201)->with('success', 'Logged in');
        }
        return redirect('/register', 401)->with('error', 'User not found');
    }

    /**
     * Register view
     * @return \Illuminate\View\View
     */
    public function registerView(): View
    {
        return view('auth.register');
    }

    public function register(AuthRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());
        $token = $user->createToken('auth_user');

        return redirect('/', 201)->with('success', 'User created');
    }
}

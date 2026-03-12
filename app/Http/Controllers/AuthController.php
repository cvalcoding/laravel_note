<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\View\View;

use function Illuminate\Support\days;
use function Symfony\Component\Clock\now;

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
            $user->createToken('auth_token', ['note:gestion'], now()->add(days(1)));
            return redirect('/', 201)->with('success', 'Logged in');
        }
        return redirect()->back()->with('error', 'User not found');
    }

    /**
     * Register view
     * @return \Illuminate\View\View
     */
    public function registerView(): View
    {
        return view('auth.register');
    }

    /**
     * register request
     * @param AuthRequest $request
     * @return RedirectResponse
     */
    public function register(AuthRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());
        $user->createToken('auth_token', ['note:gestion'], now()->add(days(1)));

        return redirect('/', 201)->with('success', 'User created');
    }

    /**
     * User profile
     * @return \Illuminate\Contracts\View\View
     */
    public function profile(): View
    {
        $user = Auth::user();
        return view('auth.profile', ['user' => $user]);
    }

    /**
     * Summary of logout
     * @param Request $request
     * @return 
     */
    public function logout(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->delete();

        return redirect('/')->with('success', 'User created');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    /**
     * Display the login form.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Handle the login request.
     */
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);


        if (Auth::attempt($credentials)) {
            $user = Auth::user();


            $cookie = cookie('user_id', $user->id, 60);
            $roleCookie = cookie('user_role', $user->role, 60);

            return redirect()->route('home')->withCookie($cookie)->withCookie($roleCookie);
        }

        
        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    /**
     * Handle user logout.
     */
    public function logout()
    {
        Auth::logout();

        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('user_role'));

        return redirect()->route('home');
    }
}

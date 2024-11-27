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
        // Validate input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log in the user using Laravel's authentication system
        if (Auth::attempt($credentials)) {
            // Retrieve authenticated user
            $user = Auth::user();

            // Create cookies for user ID and role (set expiration to 60 minutes)
            $cookie = cookie('user_id', $user->id, 60);
            $roleCookie = cookie('user_role', $user->role, 60);

            // Redirect to home with cookies
            return redirect()->route('home')->withCookie($cookie)->withCookie($roleCookie);
        }

        // If authentication fails, return back with an error message
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Handle user logout.
     */
    public function logout()
    {
        // Log the user out
        Auth::logout();

        // Forget cookies
        Cookie::queue(Cookie::forget('user_id'));
        Cookie::queue(Cookie::forget('user_role'));

        // Redirect to home page
        return redirect()->route('home');
    }
}

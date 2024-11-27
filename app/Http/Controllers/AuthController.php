<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Cookie;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $credentials['email'])->first();

    if ($user && $user->password === $credentials['password']) {
        Auth::login($user);
        $cookie = cookie('user_id', $user->id, 60);
        $roleCookie = cookie('user_role', $user->role, 60);

        return redirect()->route('home')->withCookie($cookie)->withCookie($roleCookie);
    }

    return back()->withErrors(['email' => 'Invalid credentials.']);
}

    public function logout()
    {
        Auth::logout();
        Cookie::queue(Cookie::forget('user_id'));
        return redirect()->route('home');
    }

   
}
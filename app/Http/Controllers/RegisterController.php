<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;

class RegisterController extends Controller
{
    /**
     * Handle a registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate incoming registration data
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed', // Password confirmation
            'role' => 'required|string', // Role is mandatory
        ]);

        // If validation fails, return errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Create a new user with hashed password
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' =>$request->password, 
            'role' => $request->role,
        ]);

        // Create cookies for user ID and role (set expiration to 60 minutes)
        $cookie = cookie('user_id', $user->id, 60);
        $roleCookie = cookie('user_role', $user->role, 60);

        // Redirect to the home page with cookies
        return redirect()->route('home')->withCookie($cookie)->withCookie($roleCookie);
    }
}
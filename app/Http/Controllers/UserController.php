<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of users with their related contact messages and paid information.
     */
    public function index()
    {
        
        $users = User::with(['contactMessages', 'paid'])->get();

        return view('users.index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display the user's favorite items (books and games).
     */
    public function index()
    {
        // Ensure the user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to log in to view your favorites.');
        }

        // Fetch the user's favorite books and games
        $favorites = Favorite::where('user_id', Auth::id())
            ->with(['book', 'game']) // Eager load the related book and game models
            ->get();

        return view('favorites', compact('favorites'));
    }
}

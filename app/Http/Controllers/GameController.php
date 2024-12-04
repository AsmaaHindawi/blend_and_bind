<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display the games page with filtering and favorite functionality.
     */
    public function index(Request $request)
    {
        $query = Game::query();

        // Apply type filter if provided
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $games = $query->get();

        // Retrieve favorite games for the logged-in user
        $favorites = Auth::check()
            ? Favorite::where('user_id', Auth::id())->pluck('game_id')->toArray()
            : [];

        return view('games', compact('games', 'favorites'));
    }

    /**
     * Toggle favorite status for a game.
     */
    public function toggleFavorite(Request $request, $id)
    {
        // Ensure the request is an AJAX request
        if (!$request->ajax()) {
            return response()->json(['error' => 'Bad Request'], 400);
        }

        // Ensure the user is logged in
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $userId = Auth::id();

        // Check if the game is already in the user's favorites
        $favorite = Favorite::where('user_id', $userId)->where('game_id', $id)->first();

        if ($favorite) {
            // If it exists, remove it
            $favorite->delete();
            return response()->json(['status' => 'removed', 'message' => 'Game removed from favorites.']);
        } else {
            // Otherwise, add it
            Favorite::create(['user_id' => $userId, 'game_id' => $id]);
            return response()->json(['status' => 'added', 'message' => 'Game added to favorites.']);
        }
    }
}

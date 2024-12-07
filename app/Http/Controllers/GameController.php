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

        
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $games = $query->get();


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

        if (!$request->ajax()) {
            return response()->json(['error' => 'Bad Request'], 400);
        }


        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $userId = Auth::id();


        $favorite = Favorite::where('user_id', $userId)->where('game_id', $id)->first();

        if ($favorite) {

            $favorite->delete();
            return response()->json(['status' => 'removed', 'message' => 'Game removed from favorites.']);
        } else {

            Favorite::create(['user_id' => $userId, 'game_id' => $id]);
            return response()->json(['status' => 'added', 'message' => 'Game added to favorites.']);
        }
    }
}

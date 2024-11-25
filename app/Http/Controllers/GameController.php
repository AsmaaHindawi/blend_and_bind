<?php

namespace App\Http\Controllers;
use App\Models\Game; 
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
     
    $query = Game::query();

    if ($request->filled('type')) {
        $query->where('type', $request->type);
    }

    $games = $query->get();

    return view('games', compact('games'));
        
    }

    
}

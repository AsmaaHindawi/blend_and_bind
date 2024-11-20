<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Book;
use App\Models\MenuItem;
use App\Models\Game;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
        $results = [];

        // Search in `contents` table
        $contents = Content::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('body', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($contents as $content) {
            $results[] = [
                'title' => $content->title,
                'excerpt' => substr($content->body, 0, 100),
                'url' => route('home')
            ];
        }

        // Search in `books` table
        $books = Book::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('author', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($books as $book) {
            $results[] = [
                'title' => $book->title,
                'excerpt' => 'Author: ' . $book->author,
                'url' => route('books')
            ];
        }

        // Search in `menu_items` table
        $menuItems = MenuItem::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('category', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($menuItems as $item) {
            $results[] = [
                'title' => $item->name,
                'excerpt' => 'Category: ' . $item->category,
                'url' => route('menu')
            ];
        }

        // Search in `games` table
        $games = Game::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('type', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($games as $game) {
            $results[] = [
                'title' => $game->name,
                'excerpt' => 'Type: ' . $game->type,
                'url' => route('games')
            ];
        }

        return response()->json(['data' => $results]);
    }
}

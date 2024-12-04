<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $value = $request->input('value');

        $query = Book::query();

        // Apply filter by author or genre if provided
        if ($filter === 'author') {
            $query->where('author', $value);
        } elseif ($filter === 'genre') {
            $query->where('genre', $value);
        }

        // Apply search functionality
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('author', 'like', "%$search%")
                  ->orWhere('genre', 'like', "%$search%");
            });
        }

        // Get books and top authors and genres
        $books = $query->get();
        $topAuthors = Book::select('author')->distinct()->limit(6)->pluck('author');
        $topGenres = Book::select('genre')->distinct()->limit(6)->pluck('genre');

        // Retrieve favorite books for the logged-in user
        $favorites = Auth::check()
            ? Favorite::where('user_id', Auth::id())->pluck('book_id')->toArray()
            : [];

        return view('books', compact('books', 'topAuthors', 'topGenres', 'favorites'));
    }

    public function toggleFavorite(Request $request, $id)
    {
        Log::info('Toggle Favorite Request Received', [
            'user_id' => Auth::id(),
            'book_id' => $id,
            'ajax_request' => $request->ajax(),
        ]);

        if (!Auth::check()) {
            Log::error('Unauthorized access attempt.', ['book_id' => $id]);
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if (!$request->ajax()) {
            Log::error('Bad Request: Not an AJAX request.', ['book_id' => $id]);
            return response()->json(['error' => 'Bad Request'], 400);
        }

        $userId = Auth::id();
        $favorite = Favorite::where('user_id', $userId)->where('book_id', $id)->first();

        if ($favorite) {
            Log::info('Removing book from favorites.', ['user_id' => $userId, 'book_id' => $id]);
            $favorite->delete();
            return response()->json(['status' => 'removed', 'message' => 'Book removed from favorites.']);
        } else {
            Log::info('Adding book to favorites.', ['user_id' => $userId, 'book_id' => $id]);
            Favorite::create(['user_id' => $userId, 'book_id' => $id]);
            return response()->json(['status' => 'added', 'message' => 'Book added to favorites.']);
        }
    }
}

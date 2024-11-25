<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Import the Book model

class BookController extends Controller
{
    
    public function index(Request $request)
    {
        $filter = $request->input('filter');
        $value = $request->input('value');

        $query = Book::query();

        if ($filter === 'author') {
            $query->where('author', $value);
        } elseif ($filter === 'genre') {
            $query->where('genre', $value);
        }

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                  ->orWhere('author', 'like', "%$search%")
                  ->orWhere('genre', 'like', "%$search%");
            });
        }

        $books = $query->get();
        $topAuthors = Book::select('author')->distinct()->limit(6)->pluck('author');
        $topGenres = Book::select('genre')->distinct()->limit(6)->pluck('genre');

        return view('books', compact('books', 'topAuthors', 'topGenres'));
    }

    
    public function show($id)
    {
        // Find the book by its ID
        $book = Book::findOrFail($id);

        return view('book-details', compact('book'));
    }
}
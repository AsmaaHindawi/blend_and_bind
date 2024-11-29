<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Game;
use App\Models\Book;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch data from various tables
        $userCount = User::count();
        $adminCount = User::where('role', 'admin')->count();
        $userCount -= $adminCount;

        $bookSalesCount = Book::count(); // Assuming books are tracked per sale.
        $gamesCount = Game::count(); // Assuming games info for tracking.

        $contactMessagesCount = ContactMessage::count();
        $latestMessages = ContactMessage::orderBy('created_at', 'desc')->take(5)->get();
        $popularBooks = Book::orderBy('price', 'desc')->take(5)->get(); // Replace 'price' with the correct column.

        return view('Admin Dashboard', compact('userCount', 'adminCount', 'bookSalesCount', 'gamesCount', 'contactMessagesCount', 'latestMessages', 'popularBooks'));
    }
}

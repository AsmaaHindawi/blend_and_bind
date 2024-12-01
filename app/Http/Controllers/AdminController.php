<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\MenuItem;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard with dynamic data.
     */
    public function index()
    {
        return view('Admin Dashboard', [
            'userCount' => User::count(),
            'adminCount' => User::where('role', 'admin')->count(),
            'bookCount' => Book::count(),
            'menuCount' => MenuItem::count(),
            'monthlySalesLabels' => ['January', 'February', 'March', 'April', 'May'],
            'monthlySalesData' => [500, 700, 800, 600, 750],
            'storeOverviewLabels' => ['Books', 'Menu Items', 'Reservations'],
            'storeOverviewData' => [30, 40, 30],
        ]);
    }

    /**
     * Update admin count dynamically.
     */
    public function updateAdmins(Request $request)
    {
        $validated = $request->validate([
            'adminCount' => 'required|integer|min:1',
        ]);

        $currentCount = User::where('role', 'admin')->count();

        if ($validated['adminCount'] > $currentCount) {
            $difference = $validated['adminCount'] - $currentCount;

            for ($i = 0; $i < $difference; $i++) {
                User::create([
                    'username' => 'admin' . uniqid(),
                    'email' => 'admin' . uniqid() . '@example.com',
                    'password' => bcrypt('password'), // Default password
                    'role' => 'admin',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($validated['adminCount'] < $currentCount) {
            $difference = $currentCount - $validated['adminCount'];
            User::where('role', 'admin')->limit($difference)->delete();
        }

        return redirect()->route('admin')->with('success', 'Admins count updated successfully.');
    }

    /**
     * Update book sales count dynamically.
     */
    public function updateBooks(Request $request)
    {
        $validated = $request->validate([
            'bookSales' => 'required|integer|min:0',
        ]);

        $currentCount = Book::count();

        if ($validated['bookSales'] > $currentCount) {
            $difference = $validated['bookSales'] - $currentCount;

            for ($i = 0; $i < $difference; $i++) {
                Book::create([
                    'title' => 'New Book ' . uniqid(),
                    'price' => 0.00,
                    'author' => 'Unknown',
                    'genre' => 'Undefined',
                    'publication_year' => now()->year,
                    'image' => 'default.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($validated['bookSales'] < $currentCount) {
            $difference = $currentCount - $validated['bookSales'];
            Book::limit($difference)->delete();
        }

        return redirect()->route('admin')->with('success', 'Books count updated successfully.');
    }

    /**
     * Update menu item sales dynamically.
     */
    public function updateMenus(Request $request)
    {
        $validated = $request->validate([
            'menuSales' => 'required|integer|min:0',
        ]);

        $currentCount = MenuItem::count();

        if ($validated['menuSales'] > $currentCount) {
            $difference = $validated['menuSales'] - $currentCount;

            for ($i = 0; $i < $difference; $i++) {
                MenuItem::create([
                    'name' => 'New Menu Item ' . uniqid(),
                    'category' => 'Undefined',
                    'price' => 0.00,
                    'availability' => 1,
                    'image' => 'default.jpg',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } elseif ($validated['menuSales'] < $currentCount) {
            $difference = $currentCount - $validated['menuSales'];
            MenuItem::limit($difference)->delete();
        }

        return redirect()->route('admin')->with('success', 'Menu items count updated successfully.');
    }
}

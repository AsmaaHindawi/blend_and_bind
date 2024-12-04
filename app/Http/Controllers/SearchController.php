<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
        $results = [];

        if (empty($searchTerm)) {
            return response()->json(['data' => []], 200);
        }

        // Determine the user role or state
        $userRole = Auth::check() ? Auth::user()->role : 'guest';

        // Define accessible routes for each role
        $accessibleRoutes = $this->getAccessibleRoutes($userRole);

        // Search the contents table
        $contents = Content::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('body', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($contents as $content) {
            $url = $this->mapToUrl($content->title);

            // Only include results for accessible routes
            if ($url && in_array($url, $accessibleRoutes)) {
                $results[] = [
                    'title' => $content->title,
                    'excerpt' => substr($content->body, 0, 100) . '...',
                    'url' => $url,
                ];
            }
        }

        return response()->json(['data' => $results]);
    }

    /**
     * Map content titles to specific routes.
     */
    private function mapToUrl($title)
    {
        $routes = [
            'Contact Page' => route('contact'),
            'Book' => route('books'),
            'Menu' => route('menu'),
            'About Page' => route('about'),
            'Games' => route('games'),
            'Reservations' => route('reservations'), // New reservation path
            'Add to Cart' => route('cart'),         // New add to cart path
            'Checkout' => route('checkout'),        // New checkout path
        ];

        return $routes[$title] ?? null;
    }

    /**
     * Get accessible routes based on user role or view state.
     */
    private function getAccessibleRoutes($role)
    {
        switch ($role) {
            case 'admin':
                return [
                    route('home'),
                    route('about'),
                    route('contact'),
                    route('admin'), // Admin dashboard
                    route('cart'),
                    route('checkout'),
                ];
            case 'user':
                return [
                    route('home'),
                    route('about'),
                    route('contact'),
                    route('menu'),
                    route('books'),
                    route('games'),
                    route('reservations'), // Allow reservations for logged-in users
                    route('cart'),         // Allow add to cart
                    route('checkout'),     // Allow checkout
                ];
            case 'guest':
            default:
                return [
                    route('home'),
                    route('about'),
                    route('contact'),
                ];
        }
    }
}

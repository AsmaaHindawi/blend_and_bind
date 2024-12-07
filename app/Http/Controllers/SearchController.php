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

        $userRole = Auth::check() ? Auth::user()->role : 'guest';


        $accessibleRoutes = $this->getAccessibleRoutes($userRole);


        if ($userRole === 'guest' && in_array(strtolower($searchTerm), ['games', 'menu', 'zones', 'books', 'checkout'])) {
            return response()->json([
                'data' => [
                    [
                        'title' => 'Access Denied',
                        'excerpt' => 'You are not allowed to enter the page, please log in first.',
                        'url' => route('login'),
                    ]
                ]
            ]);
        }


        $contents = Content::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('body', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($contents as $content) {
            $url = $this->mapToUrl($content->title);

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
            'Reservations' => route('reservations'),
            'Add to Cart' => route('cart'),
            'Checkout' => route('checkout'),
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
                    route('admin'),
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
                    route('reservations'), 
                    route('cart'),
                    route('checkout'),
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

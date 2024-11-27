<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('query');
        $results = [];

        if (empty($searchTerm)) {
            return response()->json(['data' => []], 200);
        }

        // Search the contents table
        $contents = Content::where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('body', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        foreach ($contents as $content) {
            $url = $this->mapToUrl($content->title); // Map titles to specific routes
            if ($url) {
                $results[] = [
                    'title' => $content->title,
                    'excerpt' => substr($content->body, 0, 100) . '...',
                    'url' => $url,
                ];
            }
        }

        return response()->json(['data' => $results]);
    }

    private function mapToUrl($title)
    {
        $routes = [
            'Contact Page' => route('contact'),
            'Book' => route('books'),
            'Menu' => route('menu'),
            'About Page' => route('about'),
            'Games' => route('games'),
        ];

        return $routes[$title] ?? null;
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        // Load testimonies from the JSON file
        $testimonies = json_decode(Storage::disk('public')->get('testimonies.json'), true);

        // Pass testimonies to the view
        return view('about', compact('testimonies'));
    }
}

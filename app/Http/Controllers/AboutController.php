<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {

        $testimonies = json_decode(Storage::disk('public')->get('testimonies.json'), true);


        return view('about', compact('testimonies'));
    }
}

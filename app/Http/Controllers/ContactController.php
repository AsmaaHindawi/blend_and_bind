<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        ContactMessage::create($validatedData);

        return redirect()->route('contact')->with('status', 'Your message has been sent successfully!');
    }
}

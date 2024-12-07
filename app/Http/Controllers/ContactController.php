<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactConfirmation;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $validatedData = $validator->validated();

    
    $name = is_array($validatedData['name']) ? implode(' ', $validatedData['name']) : $validatedData['name'];

    ContactMessage::create($validatedData);

    Mail::to($validatedData['email'])->send(new ContactConfirmation($name));

    return redirect()->back()->with('success', 'Your message has been sent successfully! A confirmation email has been sent to your email address.');
}

}

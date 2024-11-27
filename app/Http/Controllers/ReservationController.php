<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // Display the reservation form
    public function index()
    {
        return view('reservations');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'zone_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'capacity' => 'required|integer|min:1',
            'type' => 'required|string|in:table,coffee place,study room',
        ]);

        // Save the reservation to the database
        Reservation::create([
            'zone_id' => $request->zone_id,
            'name' => $request->name,
            'email' => $request->email,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'capacity' => $request->capacity,
            'type' => $request->type,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Reservation made successfully!');
    }
}
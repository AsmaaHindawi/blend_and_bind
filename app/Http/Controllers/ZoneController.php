<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    public function index()
    {

        $zones = Zone::all();
        return view('zones', compact('zones'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'reserve_time' => 'required|date_format:H:i',
            'capacity' => 'required|integer',
            'reservation_date' => 'required|date',
        ]);


        $zone = new Zone();
        $zone->name = $validatedData['name'];
        $zone->email = $validatedData['email'];
        $zone->reserve_time = $validatedData['reserve_time'];
        $zone->capacity = $validatedData['capacity'];
        $zone->reservation_date = $validatedData['reservation_date'];
        $zone->save();

        
        return response()->json([
            'message' => 'Reservation successful!',
            'zone' => $zone,
        ], 200);
    }
}

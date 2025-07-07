<?php

namespace App\Http\Controllers;

use App\Models\Booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        return view('booking');
    }

    public function store(Request $request)
 {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'pickup' => 'required|string',
            'dropoff' => 'required|string',
            'datetime' => 'required|date',
            'people' => 'required|integer|min:1|max:10',
            'luggage' => 'nullable|integer|min:0|max:10',
            'instructions' => 'nullable|string',
            'service_type' => 'required|string',
            'vehicle_type' => 'nullable|string',
        ]);

       
    Booking::create($validated);

    return back()->with('success', 'Booking received!');
    }



}

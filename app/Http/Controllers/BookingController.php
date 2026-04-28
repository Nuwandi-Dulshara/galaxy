<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'arrival_date' => ['required', 'date', 'after_or_equal:today'],
            'departure_date' => ['required', 'date', 'after:arrival_date'],
            'guests' => ['required', 'integer', 'min:1', 'max:4'],
        ]);

        Booking::create($validated);

        return back()->with('success', 'Your booking request has been submitted successfully.');
    }
}

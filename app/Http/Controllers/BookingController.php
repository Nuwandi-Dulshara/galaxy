<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => ['required', 'integer', 'exists:rooms,id'],
            'arrival_date' => ['required', 'date', 'after_or_equal:today', 'before:' . now()->addYear()->toDateString()],
            'departure_date' => ['required', 'date', 'after:arrival_date', 'before_or_equal:' . now()->addYear()->addDay()->toDateString()],
            'guests' => ['required', 'integer', 'min:1', 'max:4'],
            'guest_name' => ['required', 'string', 'max:255'],
            'guest_email' => ['required', 'email', 'max:255'],
            'guest_phone' => ['nullable', 'string', 'max:20'],
            'special_requests' => ['nullable', 'string'],
        ]);

        // Validate room capacity
        $room = Room::findOrFail($validated['room_id']);
        if ($validated['guests'] > $room->capacity) {
            return back()
                ->withInput()
                ->withErrors(['guests' => "This room can only accommodate {$room->capacity} guest(s) but you requested {$validated['guests']}."]);
        }

        // Check for availability - prevent double-booking
        $conflictingBooking = Booking::where('room_id', $validated['room_id'])
            ->where('status', 'confirmed')
            ->where(function ($query) use ($validated) {
                $query->whereBetween('arrival_date', [
                    $validated['arrival_date'],
                    $validated['departure_date'],
                ])
                ->orWhereBetween('departure_date', [
                    $validated['arrival_date'],
                    $validated['departure_date'],
                ])
                ->orWhere(function ($q) use ($validated) {
                    $q->where('arrival_date', '<=', $validated['arrival_date'])
                      ->where('departure_date', '>=', $validated['departure_date']);
                });
            })
            ->exists();

        if ($conflictingBooking) {
            return back()
                ->withInput()
                ->withErrors(['arrival_date' => 'The selected room is not available for the requested dates.']);
        }

        Booking::create($validated);

        return back()->with('success', 'Your booking request has been submitted successfully.');
    }
}

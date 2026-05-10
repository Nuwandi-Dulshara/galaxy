<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $query = Booking::with('room');

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by room
        if ($request->filled('room_id')) {
            $query->where('room_id', $request->room_id);
        }

        // Filter by date range
        if ($request->filled('from_date')) {
            $query->whereDate('arrival_date', '>=', $request->from_date);
        }

        if ($request->filled('to_date')) {
            $query->whereDate('departure_date', '<=', $request->to_date);
        }

        $bookings = $query->latest()->paginate(15);
        $statuses = ['pending', 'confirmed', 'cancelled', 'completed'];

        return view('admin.bookings.index', compact('bookings', 'statuses'));
    }

    public function show(Booking $booking)
    {
        $booking->load('room');
        return view('admin.bookings.show', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:pending,confirmed,cancelled,completed'],
        ]);

        $booking->update($validated);

        return back()->with('success', 'Booking status updated successfully.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('admin.bookings.index')->with('success', 'Booking deleted successfully.');
    }
}

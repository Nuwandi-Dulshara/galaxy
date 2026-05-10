<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = Room::all();

        if ($rooms->isEmpty()) {
            return; // Skip if no rooms exist
        }

        $bookings = [
            [
                'room_id' => $rooms->first()->id,
                'arrival_date' => now()->addDays(5),
                'departure_date' => now()->addDays(8),
                'guests' => 2,
                'guest_name' => 'John Doe',
                'guest_email' => 'john@example.com',
                'guest_phone' => '+1234567890',
                'special_requests' => 'Late checkout if possible',
                'status' => 'confirmed',
            ],
            [
                'room_id' => $rooms->first()->id,
                'arrival_date' => now()->addDays(15),
                'departure_date' => now()->addDays(18),
                'guests' => 1,
                'guest_name' => 'Jane Smith',
                'guest_email' => 'jane@example.com',
                'guest_phone' => '+1987654321',
                'special_requests' => null,
                'status' => 'pending',
            ],
            [
                'room_id' => $rooms->last()->id,
                'arrival_date' => now()->addDays(10),
                'departure_date' => now()->addDays(13),
                'guests' => 4,
                'guest_name' => 'Robert Johnson',
                'guest_email' => 'robert@example.com',
                'guest_phone' => '+1555666777',
                'special_requests' => 'Family with two children',
                'status' => 'confirmed',
            ],
        ];

        foreach ($bookings as $booking) {
            Booking::create($booking);
        }
    }
}

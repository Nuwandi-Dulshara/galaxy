<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run(): void
    {
        $rooms = [
            [
                'name' => 'Standard Room',
                'description' => 'Cozy and modern, this room offers essential amenities for a comfortable stay.',
                'price' => 210,
                'room_size' => 28,
                'view' => 'Street View',
                'bed_type' => '1 King Bed',
                'smoking' => false,
                'capacity' => 2,
                'breakfast' => true,
                'image' => 'build/assets/img/hero-1.jpeg',
                'is_featured' => true,
            ],
            [
                'name' => 'Double Room',
                'description' => 'Located at the sides of the hotel, the Double Rooms overlook the lush Robertson Park or residential Harbour.',
                'price' => 250,
                'room_size' => 30,
                'view' => 'City View',
                'bed_type' => '1 Double Bed',
                'smoking' => false,
                'capacity' => 2,
                'breakfast' => true,
                'image' => 'build/assets/img/double room.jpg',
                'is_featured' => true,
            ],
            [
                'name' => 'Family Room',
                'description' => 'This suite has a large terrace with magnificent views and an open air dining area for 6 people.',
                'price' => 320,
                'room_size' => 40,
                'view' => 'Garden View',
                'bed_type' => '2 Queen Beds',
                'smoking' => false,
                'capacity' => 4,
                'breakfast' => true,
                'image' => 'build/assets/img/family bed.jpg',
                'is_featured' => false,
            ],
            [
                'name' => 'Single Room',
                'description' => 'Located at the front of the hotel, the single rooms boast unparalleled panoramic views of Harbour Bay.',
                'price' => 180,
                'room_size' => 22,
                'view' => 'Harbour View',
                'bed_type' => '1 Single Bed',
                'smoking' => false,
                'capacity' => 1,
                'breakfast' => false,
                'image' => 'build/assets/img/single room.jpg',
                'is_featured' => false,
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}
<?php

namespace Database\Seeders;

use App\Models\Offer;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    public function run(): void
    {
        $offers = [
            [
                'title' => 'Early Bird Special',
                'description' => '20% off all room bookings when booked 30 days in advance.',
                'original_price' => 250,
                'offer_percentage' => 20,
                'offer_price' => 200,
                'is_available' => true,
                'start_date' => now(),
                'end_date' => now()->addMonths(3),
                'image' => 'build/assets/img/hero-1.jpeg',
            ],
            [
                'title' => 'Weekend Getaway Package',
                'description' => 'Book 2 nights, get one complimentary breakfast for each guest.',
                'original_price' => 500,
                'offer_percentage' => 15,
                'offer_price' => 425,
                'is_available' => true,
                'start_date' => now(),
                'end_date' => now()->addMonths(6),
                'image' => 'build/assets/img/hero-1.jpeg',
            ],
            [
                'title' => 'Honeymoon Special',
                'description' => 'Romantic package with spa credit and dinner reservation included.',
                'original_price' => 800,
                'offer_percentage' => 25,
                'offer_price' => 600,
                'is_available' => true,
                'start_date' => now(),
                'end_date' => now()->addMonths(12),
                'image' => 'build/assets/img/hero-1.jpeg',
            ],
        ];

        foreach ($offers as $offer) {
            Offer::create($offer);
        }
    }
}

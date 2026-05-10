<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Offer;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('offers:deactivate-expired', function () {
    $updated = Offer::where('end_date', '<', now()->toDateString())
        ->where('is_available', true)
        ->update(['is_available' => false]);

    $this->info("Deactivated {$updated} expired offer(s).");
})->purpose('Deactivate expired offers');

// Schedule the command to run daily
\Illuminate\Support\Facades\Schedule::command('offers:deactivate-expired')
    ->daily()
    ->name('offers:deactivate-expired')
    ->withoutOverlapping();


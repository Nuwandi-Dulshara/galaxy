<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Menu;
use App\Models\Offer;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'roomCount' => Room::count(),
            'bookingCount' => Booking::count(),
            'menuCount' => Menu::count(),
            'offerCount' => Offer::count(),
        ]);
    }
}
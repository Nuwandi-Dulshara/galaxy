<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredRooms = Room::where('is_featured', true)->latest()->take(5)->get();
        $rooms = Room::latest()->take(3)->get();

        return view('pages.index', compact('featuredRooms', 'rooms'));
    }

    public function rooms()
    {
        $rooms = Room::latest()->get();

        return view('pages.rooms', compact('rooms'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function menus()
    {
        return view('pages.menus');
    }

    public function offers()
    {
        return view('pages.offers');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}

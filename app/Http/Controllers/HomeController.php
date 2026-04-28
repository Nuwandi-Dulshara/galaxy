<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Menu;
use App\Models\Offer;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $featuredRooms = $this->prepareRoomsForPublicView(
            Room::where('is_available', true)
                ->where('is_featured', true)
                ->latest()
                ->take(5)
                ->get()
        );

        if ($featuredRooms->isEmpty()) {
            $featuredRooms = $this->prepareRoomsForPublicView(
                Room::where('is_available', true)->latest()->take(5)->get()
            );
        }

        $rooms = $this->prepareRoomsForPublicView(
            Room::where('is_available', true)->latest()->take(3)->get()
        );

        $menus = $this->prepareMenusForPublicView(
            Menu::where('is_available', true)->latest()->take(6)->get()
        );

        return view('pages.index', compact('featuredRooms', 'rooms', 'menus'));
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
        $menus = $this->prepareMenusForPublicView(
            Menu::where('is_available', true)->latest()->get()
        );

        $featuredMenus = $menus->take(6);

        $groupedMenus = $menus->groupBy(function ($menu) {
            return $menu->category ?: 'Other';
        });

        return view('pages.menus', compact('menus', 'featuredMenus', 'groupedMenus'));
    }

    public function offers()
    {
        $offers = Offer::where('is_available', true)
            ->latest()
            ->get();

        return view('pages.offers', compact('offers'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    private function prepareRoomsForPublicView($rooms)
    {
        return $rooms->map(function (Room $room) {
            $image = $room->image ?: ($room->images[0] ?? null);
            $room->image = $this->publicAssetPath($image, 'build/assets/img/hero-1.jpeg');

            return $room;
        });
    }

    private function prepareMenusForPublicView($menus)
    {
        return $menus->map(function (Menu $menu) {
            $menu->image = $this->publicAssetPath($menu->image, 'build/assets/img/dinner.webp');

            return $menu;
        });
    }

    private function publicAssetPath(?string $path, string $fallback): string
    {
        if (! $path) {
            return $fallback;
        }

        if (str_starts_with($path, 'http') || str_starts_with($path, 'storage/') || str_starts_with($path, 'build/')) {
            return $path;
        }

        if (Storage::disk('public')->exists($path)) {
            return 'storage/' . $path;
        }

        return $path;
    }
}
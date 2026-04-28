<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'room_size' => 'nullable|integer|min:0',
            'view' => 'nullable|string|max:255',
            'bed_type' => 'required|array',
            'bed_type.*' => 'string|max:100',
            'capacity' => 'required|integer|min:1',
            'availability' => 'required|in:available,unavailable',
            'unavailable_from' => 'required_if:availability,unavailable|nullable|date',
            'unavailable_to' => 'required_if:availability,unavailable|nullable|date|after_or_equal:unavailable_from',

            // Minimum 3 images required when creating
            'images' => 'required|array|min:3',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $isAvailable = $request->availability === 'available';
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('rooms', 'public');
            }
        }

        Room::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'room_size' => $request->room_size,
            'view' => $request->view,
            'bed_type' => implode(', ', $request->bed_type),
            'capacity' => $request->capacity,
            'images' => $imagePaths,
            'image' => $imagePaths[0] ?? null,
            'is_available' => $isAvailable,
            'unavailable_from' => $isAvailable ? null : $request->unavailable_from,
            'unavailable_to' => $isAvailable ? null : $request->unavailable_to,
        ]);

        return redirect()->route('admin.rooms.index')->with('success', 'Room created successfully.');
    }

    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'room_size' => 'nullable|integer|min:0',
            'view' => 'nullable|string|max:255',
            'bed_type' => 'required|array',
            'bed_type.*' => 'string|max:100',
            'capacity' => 'required|integer|min:1',
            'availability' => 'required|in:available,unavailable',
            'unavailable_from' => 'required_if:availability,unavailable|nullable|date',
            'unavailable_to' => 'required_if:availability,unavailable|nullable|date|after_or_equal:unavailable_from',

            // New images are optional, but if uploaded, minimum 3 images required
            'images' => 'nullable|array|min:3',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $isAvailable = $request->availability === 'available';
        $imagePaths = $room->images ?? [];

        if ($request->hasFile('images')) {
            if ($room->images) {
                foreach ($room->images as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            if ($room->image) {
                Storage::disk('public')->delete($room->image);
            }

            $imagePaths = [];

            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('rooms', 'public');
            }
        }

        $room->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'room_size' => $request->room_size,
            'view' => $request->view,
            'bed_type' => implode(', ', $request->bed_type),
            'capacity' => $request->capacity,
            'images' => $imagePaths,
            'image' => $imagePaths[0] ?? null,
            'is_available' => $isAvailable,
            'unavailable_from' => $isAvailable ? null : $request->unavailable_from,
            'unavailable_to' => $isAvailable ? null : $request->unavailable_to,
        ]);

        return redirect()->route('admin.rooms.index')->with('success', 'Room updated successfully.');
    }

    public function destroy(Room $room)
    {
        if ($room->images) {
            foreach ($room->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        if ($room->image) {
            Storage::disk('public')->delete($room->image);
        }

        $room->delete();

        return redirect()->route('admin.rooms.index')->with('success', 'Room deleted successfully.');
    }
}

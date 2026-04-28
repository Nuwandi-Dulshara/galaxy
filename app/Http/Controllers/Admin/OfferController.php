<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::latest()->get();
        return view('admin.offers.index', compact('offers'));
    }

    public function create()
    {
        return view('admin.offers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'original_price' => 'required|numeric|min:0',
            'offer_percentage' => 'required|numeric|min:0|max:100',
            'is_available' => 'nullable|boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $offerPrice = $request->original_price - ($request->original_price * $request->offer_percentage / 100);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('offers', 'public');
        }

        Offer::create([
            'title' => $request->title,
            'description' => $request->description,
            'original_price' => $request->original_price,
            'offer_percentage' => $request->offer_percentage,
            'offer_price' => $offerPrice,
            'is_available' => $request->has('is_available'),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.offers.index')->with('success', 'Offer created successfully.');
    }

    public function edit(Offer $offer)
    {
        return view('admin.offers.edit', compact('offer'));
    }

    public function update(Request $request, Offer $offer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'original_price' => 'required|numeric|min:0',
            'offer_percentage' => 'required|numeric|min:0|max:100',
            'is_available' => 'nullable|boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $offerPrice = $request->original_price - ($request->original_price * $request->offer_percentage / 100);

        $imagePath = $offer->image;

        if ($request->hasFile('image')) {
            if ($offer->image && Storage::disk('public')->exists($offer->image)) {
                Storage::disk('public')->delete($offer->image);
            }

            $imagePath = $request->file('image')->store('offers', 'public');
        }

        $offer->update([
            'title' => $request->title,
            'description' => $request->description,
            'original_price' => $request->original_price,
            'offer_percentage' => $request->offer_percentage,
            'offer_price' => $offerPrice,
            'is_available' => $request->has('is_available'),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.offers.index')->with('success', 'Offer updated successfully.');
    }

    public function destroy(Offer $offer)
    {
        if ($offer->image && Storage::disk('public')->exists($offer->image)) {
            Storage::disk('public')->delete($offer->image);
        }

        $offer->delete();

        return redirect()->route('admin.offers.index')->with('success', 'Offer deleted successfully.');
    }
}
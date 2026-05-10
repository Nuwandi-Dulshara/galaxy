<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'hotel_name' => Setting::get('hotel_name', 'Hotel Name'),
            'hotel_email' => Setting::get('hotel_email', ''),
            'hotel_phone' => Setting::get('hotel_phone', ''),
            'hotel_address' => Setting::get('hotel_address', ''),
            'hotel_description' => Setting::get('hotel_description', ''),
            'currency' => Setting::get('currency', 'USD'),
        ];

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hotel_name' => ['required', 'string', 'max:255'],
            'hotel_email' => ['required', 'email', 'max:255'],
            'hotel_phone' => ['required', 'string', 'max:20'],
            'hotel_address' => ['required', 'string', 'max:255'],
            'hotel_description' => ['nullable', 'string'],
            'currency' => ['required', 'string', 'max:10'],
        ]);

        foreach ($validated as $key => $value) {
            Setting::set($key, $value);
        }

        return back()->with('success', 'Settings saved successfully.');
    }
}
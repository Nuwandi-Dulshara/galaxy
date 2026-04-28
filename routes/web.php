<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController as FrontBookingController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;

use App\Models\Room;

Route::get('/rooms', function () {
    $rooms = Room::latest()->get();
    return view('pages.rooms', compact('rooms'));
})->name('rooms');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/menus', [HomeController::class, 'menus'])->name('menus');
Route::get('/offers', [HomeController::class, 'offers'])->name('offers');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/bookings', [FrontBookingController::class, 'store'])->name('bookings.store');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

        Route::get('/rooms', [RoomController::class, 'index'])->name('admin.rooms.index');
        Route::get('/rooms/create', [RoomController::class, 'create'])->name('admin.rooms.create');
        Route::post('/rooms', [RoomController::class, 'store'])->name('admin.rooms.store');
        Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('admin.rooms.edit');
        Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('admin.rooms.update');
        Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('admin.rooms.destroy');
        
        Route::get('/menu', [MenuController::class, 'index'])->name('admin.menu.index');
        Route::get('/menu/create', [MenuController::class, 'create'])->name('admin.menu.create');
        Route::post('/menu', [MenuController::class, 'store'])->name('admin.menu.store');
        Route::get('/menu/{menu}/edit', [MenuController::class, 'edit'])->name('admin.menu.edit');
        Route::put('/menu/{menu}', [MenuController::class, 'update'])->name('admin.menu.update');
        Route::delete('/menu/{menu}', [MenuController::class, 'destroy'])->name('admin.menu.destroy');

        Route::get('/offers', [OfferController::class, 'index'])->name('admin.offers.index');
        Route::get('/offers/create', [OfferController::class, 'create'])->name('admin.offers.create');
        Route::post('/offers', [OfferController::class, 'store'])->name('admin.offers.store');
        Route::get('/offers/{offer}/edit', [OfferController::class, 'edit'])->name('admin.offers.edit');
        Route::put('/offers/{offer}', [OfferController::class, 'update'])->name('admin.offers.update');
        Route::delete('/offers/{offer}', [OfferController::class, 'destroy'])->name('admin.offers.destroy');
        Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
        Route::post('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
        Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings', [SettingController::class, 'update'])->name('admin.settings.update');
    });
});

@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <div class="col-md-3">
        <div class="stat-card p-4">
            <h6 class="text-muted">Rooms</h6>
            <h2>{{ $roomCount }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card p-4">
            <h6 class="text-muted">Bookings</h6>
            <h2>{{ $bookingCount }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card p-4">
            <h6 class="text-muted">Menu Items</h6>
            <h2>{{ $menuCount }}</h2>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card p-4">
            <h6 class="text-muted">Offers</h6>
            <h2>{{ $offerCount }}</h2>
        </div>
    </div>
</div>

<div class="content-card p-4 mt-4">
    <h4>Welcome to Galaxy Admin Panel</h4>
    <p class="mb-0">Use the left sidebar to manage rooms, menu items, offers, bookings, profile, and settings.</p>
</div>
@endsection
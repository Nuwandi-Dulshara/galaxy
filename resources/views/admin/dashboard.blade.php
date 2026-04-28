@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<style>
.dashboard-card {
    border-radius: 16px;
    color: #fff;
    transition: 0.3s;
}

.dashboard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
}

.bg-rooms {
    background: linear-gradient(45deg, #4e73df, #224abe);
}

.bg-bookings {
    background: linear-gradient(45deg, #1cc88a, #13855c);
}

.bg-menu {
    background: linear-gradient(45deg, #f6c23e, #dda20a);
}

.bg-offers {
    background: linear-gradient(45deg, #e74a3b, #be2617);
}

.icon-box {
    font-size: 35px;
    opacity: 0.8;
}

.welcome-box {
    background: #fff;
    border-radius: 16px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}
</style>

<div class="container-fluid">

    <!-- Dashboard Cards -->
    <div class="row g-4">

        <!-- Rooms -->
        <div class="col-md-3">
            <div class="dashboard-card bg-rooms p-4 d-flex justify-content-between align-items-center">
                <div>
                    <h6>Rooms</h6>
                    <h2>{{ $roomCount }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-door-open"></i>
                </div>
            </div>
        </div>

        <!-- Bookings -->
        <div class="col-md-3">
            <div class="dashboard-card bg-bookings p-4 d-flex justify-content-between align-items-center">
                <div>
                    <h6>Bookings</h6>
                    <h2>{{ $bookingCount }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-calendar-check"></i>
                </div>
            </div>
        </div>

        <!-- Menu -->
        <div class="col-md-3">
            <div class="dashboard-card bg-menu p-4 d-flex justify-content-between align-items-center">
                <div>
                    <h6>Menu Items</h6>
                    <h2>{{ $menuCount }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-cup-hot"></i>
                </div>
            </div>
        </div>

        <!-- Offers -->
        <div class="col-md-3">
            <div class="dashboard-card bg-offers p-4 d-flex justify-content-between align-items-center">
                <div>
                    <h6>Offers</h6>
                    <h2>{{ $offerCount }}</h2>
                </div>
                <div class="icon-box">
                    <i class="bi bi-tags"></i>
                </div>
            </div>
        </div>

    </div>

    <!-- Welcome Section -->
    <div class="welcome-box p-4 mt-4">
        <h4 class="mb-2">Welcome to Galaxy Admin Panel 🚀</h4>
        <p class="text-muted mb-0">
            Manage your hotel efficiently. Use the sidebar to control rooms, bookings, menu items, and offers.
        </p>
    </div>

</div>

@endsection
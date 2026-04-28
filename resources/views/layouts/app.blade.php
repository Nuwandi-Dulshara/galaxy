<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>

    @include('libraries.styles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    @stack('styles')

    <style>
    body {
        margin: 0;
        padding: 0;
        background: #f5f7fb;
        font-family: Arial, sans-serif;
    }

    .admin-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .admin-sidebar {
        width: 250px;
        background: #102c57;
        color: #fff;
        padding: 20px;
    }

    .admin-sidebar h4 {
        margin-bottom: 30px;
        font-weight: bold;
    }

    .admin-sidebar a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 12px 14px;
        border-radius: 8px;
        margin-bottom: 8px;
    }

    .admin-sidebar a:hover,
    .admin-sidebar a.active {
        background: #f5a623;
        color: #102c57;
    }

    .admin-content {
        flex: 1;
        padding: 30px;
    }

    .content-card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
    }

    .btn-primary {
        background: #102c57;
        border-color: #102c57;
    }

    .btn-primary:hover {
        background: #f5a623;
        border-color: #f5a623;
        color: #102c57;
    }
    </style>
</head>

<body>
    <div class="admin-wrapper">

        <aside class="admin-sidebar">
            <h4>Hotel Admin</h4>

            <a href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>

            <a href="{{ route('admin.rooms.index') }}">
                <i class="bi bi-door-open"></i> Rooms
            </a>

            <a href="{{ route('admin.menu.index') }}">
                <i class="bi bi-card-list"></i> Menu
            </a>

            <a href="{{ route('admin.offers.index') }}">
                <i class="bi bi-tags"></i> Offers
            </a>

            <a href="{{ route('admin.bookings.index') }}">
                <i class="bi bi-calendar-check"></i> Bookings
            </a>

            <a href="{{ route('admin.profile.index') }}">
                <i class="bi bi-person"></i> Profile
            </a>

            <a href="{{ route('admin.settings.index') }}">
                <i class="bi bi-gear"></i> Settings
            </a>

            <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
                @csrf
                <button type="submit" class="btn btn-danger w-100">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </aside>

        <main class="admin-content">
            @yield('content')
        </main>

    </div>

    @include('libraries.scripts')
    @stack('scripts')
</body>

</html>
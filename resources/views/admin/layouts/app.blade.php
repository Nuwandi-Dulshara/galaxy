<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
    :root {
        --theme-gold: #b6a234;
        --theme-gold-light: #d5c15a;
        --theme-dark: #111111;
        --theme-dark-2: #1b1b1b;
        --theme-bg: #f9f7f2;
        --theme-text: #444444;
    }

    body {
        margin: 0;
        background: var(--theme-bg);
        font-family: Arial, sans-serif;
        color: var(--theme-text);
    }

    .admin-wrapper {
        display: flex;
        min-height: 100vh;
    }

    .sidebar {
        width: 260px;
        background: linear-gradient(180deg, var(--theme-dark), var(--theme-dark-2));
        color: #fff;
        padding: 24px 18px;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        overflow-y: auto;
        border-right: 3px solid var(--theme-gold);
    }

    .brand {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 28px;
    }

    .brand span {
        color: var(--theme-gold);
    }

    .sidebar .nav-link {
        color: #ddd;
        padding: 12px 14px;
        border-radius: 10px;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
        background: rgba(182, 162, 52, 0.15);
        color: #fff;
        border-left: 4px solid var(--theme-gold);
    }

    .sidebar .nav-link i {
        color: var(--theme-gold);
    }

    .main-content {
        margin-left: 260px;
        width: calc(100% - 260px);
        min-height: 100vh;
    }

    .topbar {
        background: #fff;
        border-bottom: 1px solid #e5e5e5;
        padding: 18px 28px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .page-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--theme-dark);
    }

    .content-area {
        padding: 28px;
    }

    .stat-card,
    .content-card {
        background: #fff;
        border: none;
        border-radius: 14px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .stat-card {
        border-left: 5px solid var(--theme-gold);
    }

    .btn-theme,
    .btn-primary,
    .btn-theme-light {
        background: var(--theme-gold) !important;
        border-color: var(--theme-gold) !important;
        color: #111 !important;
        font-weight: 600;
    }

    .btn-theme:hover,
    .btn-primary:hover,
    .btn-theme-light:hover {
        background: var(--theme-gold-light) !important;
        border-color: var(--theme-gold-light) !important;
        color: #111 !important;
    }

    .btn-theme-icon {
        background: var(--theme-gold) !important;
        border-color: var(--theme-gold) !important;
        color: #111 !important;
        font-weight: 600;
    }

    .btn-theme-icon i {
        color: #111 !important;
    }

    .btn-theme-icon:hover {
        background: var(--theme-dark) !important;
        border-color: var(--theme-dark) !important;
        color: #fff !important;
    }

    .btn-theme-icon:hover i {
        color: #fff !important;
    }

    .table thead th {
        background: var(--theme-dark) !important;
        color: #fff !important;
        border-color: var(--theme-gold) !important;
    }

    .table tbody tr:hover {
        background: #faf7ea;
    }

    .table img {
        border: 1px solid var(--theme-gold) !important;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--theme-gold);
        box-shadow: 0 0 0 0.2rem rgba(182, 162, 52, 0.2);
    }

    @media (max-width: 991px) {
        .sidebar {
            position: relative;
            width: 100%;
            height: auto;
        }

        .main-content {
            margin-left: 0;
            width: 100%;
        }

        .admin-wrapper {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>

    <div class="admin-wrapper">
        <aside class="sidebar">
            <div class="brand">GALAXY <span>ADMIN</span></div>

            <nav class="nav flex-column">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="bi bi-grid-fill"></i> Dashboard
                </a>

                <a href="{{ route('admin.rooms.index') }}"
                    class="nav-link {{ request()->routeIs('admin.rooms.*') ? 'active' : '' }}">
                    <i class="bi bi-door-open-fill"></i> Rooms
                </a>

                <a href="{{ route('admin.menu.index') }}"
                    class="nav-link {{ request()->routeIs('admin.menu.*') ? 'active' : '' }}">
                    <i class="bi bi-cup-hot-fill"></i> Menu
                </a>

                <a href="{{ route('admin.offers.index') }}"
                    class="nav-link {{ request()->routeIs('admin.offers.*') ? 'active' : '' }}">
                    <i class="bi bi-tags-fill"></i> Offers
                </a>

                <a href="{{ route('admin.bookings.index') }}"
                    class="nav-link {{ request()->routeIs('admin.bookings.*') ? 'active' : '' }}">
                    <i class="bi bi-calendar-check-fill"></i> Booking
                </a>

                <a href="{{ route('admin.profile.index') }}"
                    class="nav-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                    <i class="bi bi-person-circle"></i> Profile
                </a>

                <a href="{{ route('admin.settings.index') }}"
                    class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                    <i class="bi bi-gear-fill"></i> Settings
                </a>
            </nav>

            <div class="mt-4 pt-3 border-top border-secondary">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-theme w-100">Logout</button>
                </form>
            </div>
        </aside>

        <main class="main-content">
            <div class="topbar">
                <div class="page-title">@yield('title', 'Dashboard')</div>
                <div>
                    <strong>{{ auth()->user()->name }}</strong>
                </div>
            </div>

            <div class="content-area">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>

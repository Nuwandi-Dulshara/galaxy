<header id="header"
    class="header d-flex align-items-center fixed-top
    {{ request()->routeIs('home') ? 'home-header' : 'header-black' }}">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" style="height: 200px; width: auto;">
    </a>

    <!-- Navbar (CENTER) -->
    <nav id="navmenu" class="navmenu">
      <ul class="d-flex justify-content-center m-0">
<li>
  <a href="{{ route('home') }}"
     class="{{ request()->routeIs('home') ? 'active' : '' }}">
     HOME
  </a>
</li>

<li>
  <a href="{{ route('about') }}"
     class="{{ request()->routeIs('about') ? 'active' : '' }}">
     ABOUT
  </a>
</li>

<li>
  <a href="{{ route('rooms') }}"
     class="{{ request()->routeIs('rooms') ? 'active' : '' }}">
     ROOMS
  </a>
</li>

<li>
  <a href="{{ route('menus') }}"
     class="{{ request()->routeIs('menus') ? 'active' : '' }}">
     MENU
  </a>
</li>

<li>
  <a href="{{ route('offers') }}"
     class="{{ request()->routeIs('offers') ? 'active' : '' }}">
     OFFERS
  </a>
</li>

<li>
  <a href="{{ route('contact') }}"
     class="{{ request()->routeIs('contact') ? 'active' : '' }}">
     CONTACT
  </a>
</li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Button -->
    <a class="cta-btn" href="{{ route('rooms') }}"><i class="bi bi-calendar"></i> RESERVATION</a>

  </div>
</header>

<style>
/* =========================
   GLOBAL HEADER BASE
========================= */
.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 997;
    padding: 15px 0;

    background: transparent !important;
    transition: all 0.4s ease;
}

/* =========================
   HOME PAGE HEADER
========================= */
.home-header {
    background: transparent !important;
}

/* =========================
   OTHER PAGES HEADER
========================= */
.header-black {
    background: rgba(0, 0, 0, 0.95) !important;
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
}

/* =========================
   SCROLL EFFECT OVERLAY
========================= */
.scrolled .header::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
    transition: all 0.3s ease;
}

/* Prevent unwanted white background */
.header::before {
    content: "";
    position: absolute;
    inset: 0;
    background: transparent;
    z-index: -1;
}

/* =========================
   LOGO
========================= */
.header .logo img {
    max-height: 100px;
    width: auto;
}

/* =========================
   NAV MENU
========================= */
.navmenu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.navmenu a {
    color: #fff;
    padding: 18px 15px;
    font-size: 14px;
    text-decoration: none;
    transition: 0.3s;
}

.navmenu a:hover {
    color: #FFD700;
}

/* =========================
   CTA BUTTON
========================= */
.cta-btn {
    background: #b6a234 !important;
    color: #ffffff !important;
    font-weight: 400;
    font-size: 14px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 10px 30px;
    border-radius: 4px;
    transition: 0.3s;
    text-transform: uppercase;
    text-decoration: none;
    border: none;
}

.cta-btn i {
    margin-right: 8px;
}

.cta-btn:hover {
    background: #FFD700 !important;
}

/* =========================
   MOBILE MENU ICON
========================= */
.mobile-nav-toggle {
    font-size: 28px;
    color: #fff;
    cursor: pointer;
}

/* =========================
   HEADER SCROLLED STATE
========================= */
.scrolled .header {
    background: rgba(0, 0, 0, 0.85) !important;
    backdrop-filter: blur(10px);
}
.navmenu a.active {
    color: #FFD700 !important;
    font-weight: 600;
}
</style>


<footer class="bg-black text-light pt-5 pb-3">
    <div class="container py-4">
        <div class="row gy-4">

            <div class="col-lg-4 col-md-6">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo" style="height: 110px; width: auto;">
                </a>
                <p class="text-secondary mb-4 pe-lg-5">
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Donec velit neque auctor sit amet aliquam vel ullamcorper sit amet ligula.
                </p>
                {{--  <h6 class="fw-bold mb-3">Stay Updated</h6>  --}}

            </div>

            <div class="col-lg-2 col-md-3">
                <h5 class="fw-bold mb-3 border-bottom border-orange border-3 pb-2 d-inline-block">Company</h5>
                <ul class="list-unstyled lh-lg mt-3">
                    <li><a href="{{ route('home') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>About</a></li>
                    <li><a href="{{ route('rooms') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Rooms</a></li>
                    <li><a href="{{ route('menus') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Menus</a></li>
                    <li><a href="{{ route('offers') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Offers</a></li>
                    <li><a href="{{ route('contact') }}" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3">
                <h5 class="fw-bold mb-3 border-bottom border-orange border-3 pb-2 d-inline-block">Our services</h5>
                <ul class="list-unstyled lh-lg mt-3">
                    <li><a href="#" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Room Booking</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Restaurant & Dining</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Best Menus</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Conference & Events</a></li>
                    <li><a href="#" class="text-secondary text-decoration-none"><i class="bi bi-chevron-right me-2 small text-orange"></i>Best Offers</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h5 class="fw-bold mb-3 border-bottom border-orange border-3 pb-2 d-inline-block">Get in Touch</h5>
                <div class="mt-3">
                    <div class="d-flex mb-3">
                        <i class="bi bi-geo-alt-fill text-orange me-3 fs-5"></i>
                        <span class="text-secondary">The Galaxy Airport Hotel, No.433/3/B, Kimbulapitiya estate, Kimbulapitiya Rd, Negombo</span>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="bi bi-telephone-fill text-orange me-3 fs-5"></i>
                        <span class="text-secondary">+94 751800393</span>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-envelope-fill text-orange me-3 fs-5"></i>
                        <span class="text-secondary">info@galaxyairporthotel.com</span>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="https://www.facebook.com/profile.php?id=61580946779345#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
                        <a href="https://www.tiktok.com/@the_galaxy_airport_hotel?_r=1&_t=ZS-95gzOZPKx8b" class="social-icon"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container border-top border-secondary mt-5 pt-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <p class="mb-0 small text-secondary">© Copyright <span class="fw-bold text-light">Galaxy website</span> All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center text-md-end small">
                <a href="#" class="text-secondary text-decoration-none me-3">Privacy Policy</a>
                <a href="#" class="text-secondary text-decoration-none me-3">Terms of Service</a>
                <a href="#" class="text-secondary text-decoration-none">Cookie Policy</a>
                <p class="mb-0 mt-2 text-secondary">Designed by <span class="text-orange">web developer</span> | <span class="text-orange">DevTools</span></p>
            </div>
        </div>
    </div>
</footer>

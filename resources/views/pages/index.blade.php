@extends('layouts.main')

@section('pageContent')

<!-- Hero Section -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="hero-overlay"></div>

    <div class="container position-relative text-center text-white" style="margin-top:150px;">

        <div class="stars mb-3">
            <p class="stars">★★★★★</p>
        </div>

        <h1 class="hero-title">GALAXY AIRPORT HOTEL</h1>

        <p class="hero-subtitle">
            Located in the heart of the city, this luxurious, modern hotel offers<br>
            top-notch amenities for a perfect stay
        </p>

        <a href="{{ route('rooms') }}" class="btn hero-btn">
            Book Now <i class="bi bi-arrow-right"></i>
        </a>

        <div class="hero-bottom d-flex justify-content-between align-items-center text-white">

            <div class="left-info-group">
                <div class="small-info-box box-1">
                    <i class="bi bi-calendar-check"></i> SINCE 1970 • 54 YEARS OF OPERATION
                </div>
                <div class="small-info-box box-2">
                    GALAXY STORY <i class="bi bi-arrow-right"></i>
                </div>
            </div>

            <div class="small-info right-info">
                <i class="bi bi-people-fill"></i> +6.4K Bookings &nbsp; | &nbsp; 4.9/5 ★ 3.5K Reviews
            </div>

        </div>
    </div>
</section>

{{-- Book now form --}}
<section class="py-5 bg-white">
    <div class="container">
        <h6 class="fw-normal mb-3">Book Room</h6>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="row g-3 align-items-end" action="{{ route('bookings.store') }}" method="POST">
            @csrf

            <div class="col-lg-3 col-md-6">
                <label class="form-label small">Arrival</label>
                <div class="input-group shadow-none">
                    <input type="date" name="arrival_date" class="form-control bg-white"
                        value="{{ old('arrival_date') }}">
                    <span class="input-group-text bg-white border-start-0 text-muted">
                        <i class="bi bi-calendar3"></i>
                    </span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <label class="form-label small">Departure</label>
                <div class="input-group shadow-none">
                    <input type="date" name="departure_date" class="form-control bg-white"
                        value="{{ old('departure_date') }}">
                    <span class="input-group-text bg-white border-start-0 text-muted">
                        <i class="bi bi-calendar3"></i>
                    </span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <label class="form-label small">Guests</label>
                <select name="guests" class="form-select bg-white">
                    <option value="1" {{ old('guests') == '1' ? 'selected' : '' }}>1 guest</option>
                    <option value="2" {{ old('guests', '2') == '2' ? 'selected' : '' }}>2 guests</option>
                    <option value="3" {{ old('guests') == '3' ? 'selected' : '' }}>3 guests</option>
                    <option value="4" {{ old('guests') == '4' ? 'selected' : '' }}>4 guests</option>
                </select>
            </div>

            <div class="col-lg-3 col-md-6">
                <button type="submit" class="btn btn-dark w-100 fw-bold py-2 rounded-0">BOOK NOW</button>
            </div>
        </form>
    </div>
</section>

{{-- FOUR CARD WITH TEXT --}}
<section class="py-5 features">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded">
                    <i class="bi bi-geo-alt"></i>
                    <h5>Located in the heart of the city</h5>
                    <p class="small text-muted">Ideally located for easy access and convenience.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded">
                    <i class="bi bi-house-door"></i>
                    <h5>Luxurious, modern, and comfortable</h5>
                    <p class="small text-muted">Experience a spacious, fully equipped space.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded">
                    <i class="bi bi-people"></i>
                    <h5>Friendly and welcoming staff</h5>
                    <p class="small text-muted">Our staff ensure a delightful stay every time.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature-box shadow-sm p-4 rounded">
                    <i class="bi bi-tag"></i>
                    <h5>Best prices and great offers</h5>
                    <p class="small text-muted">Enjoy unbeatable prices tailored for you.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- two image with text --}}
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 pt-5">
                        <img src="{{ asset('build/assets/img/hero-1.jpeg') }}"
                            class="img-fluid shadow-sm room-image-tall" alt="Luxury Room View 1">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('build/assets/img/hero-1.jpeg') }}"
                            class="img-fluid shadow-sm room-image-tall" alt="Luxury Room View 2">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h6 class="text-uppercase ls-wide text-muted mb-3" style="letter-spacing: 2px;">Welcome to Galaxy</h6>
                <h1 class="display-4 fw-normal mb-4 text-dark" style="font-family: 'Playfair Display', serif;">
                    Luxury hotel in the heart of the city.
                </h1>
                <p class="text-secondary mb-4 lh-lg">
                    Galaxy Luxury Hotel, in the heart of the city, offers over 500 modern, luxurious rooms. Enjoy
                    premium facilities, perfect for relaxation and indulgence. Our friendly staff ensures a seamless,
                    personalized experience, with stunning city views. Discover true luxury and hospitality at Galaxy.
                </p>
                <a href="#" class="btn btn-sm px-4 py-2 rounded-0 text-white border-0"
                    style="background-color: #b6a234;">
                    READ MORE <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>

        <div class="row mt-5 pt-5 border-top">
            <div class="col-md-4 d-flex align-items-center mb-4 mb-md-0">
                <div class="bg-primary text-white p-2 fw-bold me-3 rounded">B.</div>
                <div>
                    <div class="fw-bold">4.9/5 <span class="text-warning small">★★★★★</span> <span
                            class="text-success small ms-1">Excellent</span></div>
                    <div class="small text-muted">3.5K Reviews on Booking</div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center mb-4 mb-md-0">
                <div class="border p-2 fw-bold me-3 rounded" style="color: #00af87;">a</div>
                <div>
                    <div class="fw-bold">5/5 <span class="text-warning small">★★★★★</span> <span
                            class="text-success small ms-1">Excellent</span></div>
                    <div class="small text-muted">4.1K Reviews on Agoda</div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center">
                <img src="tripadvisor-logo.png" class="me-3" style="width: 32px;" alt="Tripadvisor">
                <div>
                    <div class="fw-bold">4.8/5 <span class="text-warning small">★★★★★</span> <span
                            class="text-success small ms-1">Good</span></div>
                    <div class="small text-muted">2.4K Reviews on Tripadvisor</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Featured rooms carousel --}}
<section class="py-5" style="background-color: #f9f7f2;">
    <div class="container">

        <div class="text-center mb-5">
            <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #b6a234;">
                Exquisite and Luxurious
            </h6>

            <p class="lead" style="font-family: 'Playfair Display', serif; color: #636363;">
                Room and suite collections
            </p>
        </div>

        <div class="owl-carousel room-carousel">
            @forelse($featuredRooms as $room)
            <div class="item">
                <div class="row g-0 bg-white shadow-sm align-items-stretch position-relative"
                    style="max-width: 1100px; margin: 0 auto;">

                    <div class="col-lg-6 p-4 p-md-5 d-flex flex-column justify-content-center">
                        <div class="mb-3">
                            <span class="text-muted small">From:</span>
                            <span class="h3 fw-bold mb-0">${{ number_format($room->price, 0) }}</span>
                            <span class="text-muted small text-uppercase">/Night</span>
                        </div>

                        <h3 class="h4 mb-3 text-dark">{{ $room->name }}</h3>

                        <p class="text-muted mb-4">
                            {{ $room->description }}
                        </p>

                        <div class="row g-3 mb-5 text-uppercase small" style="color:#636363;">
                            <div class="col-6">Room Size {{ $room->room_size }} m²</div>
                            <div class="col-6">{{ $room->view }}</div>
                            <div class="col-6">{{ $room->bed_type }}</div>
                            <div class="col-6">Smoking - {{ $room->smoking ? 'Yes' : 'No' }}</div>
                            <div class="col-6">{{ $room->capacity }} Adults</div>
                            <div class="col-6">Breakfast - {{ $room->breakfast ? 'Yes' : 'No' }}</div>
                        </div>

                        <div class="d-flex gap-3">
                            <a href="{{ route('rooms') }}" class="btn btn-sm text-sm text-white"
                                style="background:#b6a234; font-size: 12px;">
                                <i class="bi bi-calendar"></i> BOOK NOW
                            </a>
                            <a href="{{ route('rooms') }}" class="btn btn-sm text-sm btn-outline-dark"
                                style="font-size: 12px;">
                                <i class="bi bi-eye"></i> VIEW ROOM
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="h-100" style="background: url('{{ asset($room->image) }}') center/cover no-repeat;">
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="item">
                <div class="row g-0 bg-white shadow-sm align-items-stretch position-relative"
                    style="max-width: 1100px; margin: 0 auto;">
                    <div class="col-lg-12 p-5 text-center">
                        <h4>No featured rooms found.</h4>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- More room cards --}}
<section class="py-5 bg-light mt-5">
    <div class="container mt-5">
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('rooms') }}" class="text-dark text-end"
                style="text-decoration: none;font-size: 12px; font-weight: 500;">
                VIEW MORE <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>

        <div class="row g-4 position-relative">
            @forelse($rooms as $room)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-1 overflow-hidden">
                    <img src="{{ asset($room->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;"
                        alt="{{ $room->name }}">
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-3">{{ $room->name }}</h5>
                        <p class="card-text text-secondary small lh-base">
                            {{ \Illuminate\Support\Str::limit($room->description, 120) }}
                        </p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">No rooms available.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-lg-5">

        <div class="text-center mb-5">
            <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #b6a234;">Modern and Comfortable</h6>
            <p class="lead" style="font-family: 'Playfair Display', serif; color: #636363;">Facilities and amenities</p>
        </div>

        <div class="row g-5">

            <div class="col-md-4 d-flex align-items-start">
                <div class="me-3 mt-1" style="color: #b6a234; font-size: 2rem;">
                    <i class="bi bi-wifi"></i>
                </div>
                <div>
                    <h5 class="h6 fw-bold mb-2" style="color: #636363">High Speed Wifi</h5>
                    <p class="text-muted small mb-0">Enjoy seamless, high-speed internet access throughout the hotel.
                    </p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-start">
                <div class="me-3 mt-1" style="color: #b6a234; font-size: 2rem;">
                    <i class="bi bi-p-circle"></i>
                </div>
                <div>
                    <h5 class="h6 fw-bold mb-2" style="color: #636363">Parking Space</h5>
                    <p class="text-muted small mb-0">Ample and secure parking space provided for all hotel guests.</p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-start">
                <div class="me-3 mt-1" style="color: #b6a234; font-size: 2rem;">
                    <i class="bi bi-cup-straw"></i>
                </div>
                <div>
                    <h5 class="h6 fw-bold mb-2" style="color: #636363">Restaurant & Bar</h5>
                    <p class="text-muted small mb-0">Savor gourmet dishes and cocktails at our elegant restaurant and
                        bar.</p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-start">
                <div class="me-3 mt-1" style="color: #b6a234; font-size: 2rem;">
                    <i class="bi bi-flower1"></i>
                </div>
                <div>
                    <h5 class="h6 fw-bold mb-2" style="color: #636363">Spa Center</h5>
                    <p class="text-muted small mb-0">Indulge in a variety of relaxing and rejuvenating treatments at our
                        spa.</p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-start">
                <div class="me-3 mt-1" style="color: #b6a234; font-size: 2rem;">
                    <i class="bi bi-bicycle"></i>
                </div>
                <div>
                    <h5 class="h6 fw-bold mb-2" style="color: #636363">Fitness Center</h5>
                    <p class="text-muted small mb-0">Stay active with state-of-the-art fitness equipment in our modern
                        gym.</p>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-start">
                <div class="me-3 mt-1" style="color: #b6a234; font-size: 2rem;">
                    <i class="bi bi-droplet"></i>
                </div>
                <div>
                    <h5 class="h6 fw-bold mb-2" style="color: #636363">Swimming Pool</h5>
                    <p class="text-muted small mb-0">Refresh and unwind in our pristine outdoor swimming pool.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-section position-relative text-white d-flex align-items-center justify-content-center"
    style="min-height: 60vh; background: #000;">

    <video class="video-bg" autoplay muted loop playsinline>
        <source src="{{ asset('build/assets/video/galaxy hotel video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.45);"></div>

    <div class="container position-relative text-center"></div>
</section>

@endsection

@push('styles')
<style>
body {
    padding-top: 80px;
}

.video-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

.video-section {
    position: relative;
    overflow: hidden;
}

.video-section .container,
.video-section .d-inline-block {
    position: relative;
    z-index: 1;
}

.hero {
    width: 100%;
    min-height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset("build/assets/img/hero-1.jpeg") }}') center center / cover no-repeat;
    background-attachment: fixed;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.hero .container {
    position: relative;
    z-index: 2;
}

.stars {
    font-size: 18px;
    letter-spacing: 3px;
    color: #f5c542;
    font-weight: bold;
}

.hero-title {
    font-size: 64px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    margin: 10px 0;
    font-family: 'Montserrat', sans-serif;
}

.hero-subtitle {
    font-size: 18px;
    color: #e6e6e6;
    line-height: 1.6;
}

.hero-btn {
    display: inline-block;
    padding: 12px 28px;
    color: #fff;
    text-decoration: none;
    font-weight: 400;
    transition: 0.3s ease;
}

.hero-bottom {
    margin-top: 120px;
    font-size: 11px;
    letter-spacing: 1px;
    opacity: 0.9;
    gap: 20px;
}

.left-info-group {
    display: flex;
    position: relative;
    flex: none;
    margin-right: auto;
}

.small-info-box {
    padding: 8px 12px;
    border-radius: 0px;
    text-align: center;
    position: relative;
    z-index: 2;
    border: 2px solid transparent;
    transition: 0.3s ease;
    font-size: 10px;
    line-height: 1.2;
}

.small-info-box:hover {
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.box-1 {
    background: linear-gradient(135deg, #b6a234, #FFD700);
    color: #000;
    margin-right: -8px;
    border-radius: 6px 0 0 6px;
}

.box-2 {
    background: linear-gradient(135deg, #2c2c2c, #1a1a1a);
    color: #fff;
    margin-left: -8px;
    border-radius: 0 6px 6px 0;
    border-left: 2px solid #FFD700;
}

.right-info {
    flex: none;
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 10px;
    line-height: 1.2;
    margin-left: auto;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.hero-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 40px;
    color: #fff;
    cursor: pointer;
    z-index: 3;
    padding: 10px;
    transition: 0.3s;
    user-select: none;
}

.hero-arrow:hover {
    color: #f5c542;
}

.hero-arrow.left {
    left: 30px;
}

.hero-arrow.right {
    right: 30px;
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 36px;
        font-family: 'Montserrat', sans-serif;
    }

    .hero-subtitle {
        font-size: 14px;
    }

    .hero-bottom {
        flex-direction: column;
        gap: 10px;
        margin-top: 40px;
    }

    .hero-arrow {
        font-size: 28px;
    }
}

.features .feature-box h5 {
    font-size: 1rem;
    margin-top: 15px;
    font-weight: 500;
}

.features {
    background-color: #ffffff !important;
    padding: 60px 0 !important;
}

.features h5,
.features p {
    color: #333333 !important;
}

.features .bi {
    color: #b6a234;
    font-size: 32px;
    margin-bottom: 15px;
}

.features-white {
    background-color: #ffffff;
    padding: 60px 0;
}

.room-image-first {
    transform: translateY(-25px);
}

.room-image-tall {
    height: 400px;
    object-fit: cover;
}

.hero-title {
    font-family: var(--heading-font);
}

.room-img {
    height: 100%;
    min-height: 350px;
    background-size: cover;
    background-position: center;
}

.room-carousel .item {
    padding: 10px;
}

.owl-nav button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #000 !important;
    color: #fff !important;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    opacity: 0.7;
}

.owl-nav .owl-prev {
    left: -20px;
}

.owl-nav .owl-next {
    right: -20px;
}

.owl-nav button:hover {
    background: #b6a234 !important;
}

.form-control:focus {
    border-color: #bc987e;
    box-shadow: 0 0 0 0.2rem rgba(188, 152, 126, 0.25);
    background-color: #fff;
}

.input-group-text {
    background-color: #fff;
}

.input-group:focus-within .input-group-text {
    border-color: #bc987e;
}

.form-control {
    background-color: #fff !important;
    color: #000;
    border: 1px solid #ccc;
}

.form-control:focus {
    background-color: #fff !important;
    color: #000;
    border-color: #585857;
    box-shadow: 0 0 0 0.2rem rgba(182, 162, 52, 0.25);
    outline: none;
}

.form-select:focus {
    border-color: #b3b3b3;
    box-shadow: none;
    outline: none;
    background-color: #fff !important;
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    $(".room-carousel").owlCarousel({
        items: 1,
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 40000,
        smartSpeed: 800
    });
});
</script>
@endpush
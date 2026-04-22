@extends('layouts.main')

@section('pageContent')



<div class="container py-5 mt-5">

    <div class="owl-carousel room-carousel mt-5">

        {{-- ================= DOUBLE ROOM ================= --}}
        <div class="item">
            <section class="py-5">
                <div class="container">

            <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #242423;">
                 DOUBLE ROOM 
            </h6>

                    <div class="row g-2 mb-4">
                        <div class="col-12">
                            <img src="{{ asset('build/assets/img/double bed.jpg') }}" class="img-fluid w-100 rounded shadow-sm" style="height:450px; object-fit:cover;">
                        </div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/double bed.jpg') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/breaksfast.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/chair.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/Kottu.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                    </div>

                    <p class="text-secondary">
                        Located at the sides of the hotel, the Double Rooms overlook the lush Robertson Park...
                    </p>

                    @include('components.booking-form')

                </div>
            </section>
        </div>

        {{-- ================= FAMILY ROOM ================= --}}
        <div class="item">
            <section class="py-5">
                <div class="container">


            <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #242423;">
                 FAMILY ROOM 
            </h6>

                    <div class="row g-2 mb-4">
                        <div class="col-12">
                            <img src="{{ asset('build/assets/img/family bed.jpg') }}" class="img-fluid w-100 rounded shadow-sm" style="height:450px; object-fit:cover;">
                        </div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/family bed.jpg') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/breaksfast.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/chair.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/lunch.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                    </div>

                    <p class="text-secondary">
                        Family Rooms offer spacious luxury with terrace views and open dining area...
                    </p>

                    @include('components.booking-form')

                </div>
            </section>
        </div>

        {{-- ================= SINGLE ROOM ================= --}}
        <div class="item">
            <section class="py-5">
                <div class="container">


                    <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #242423;">
                        SINGLE ROOM 
                    </h6>

                    <div class="row g-2 mb-4">
                        <div class="col-12">
                            <img src="{{ asset('build/assets/img/single room.jpg') }}" class="img-fluid w-100 rounded shadow-sm" style="height:450px; object-fit:cover;">
                        </div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/single room.jpg') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/breaksfast.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/chair.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                        <div class="col-3"><img src="{{ asset('build/assets/img/lunch.webp') }}" class="img-fluid rounded shadow-sm" style="height:100px; object-fit:cover;"></div>
                    </div>

                    <p class="text-secondary">
                        Single Rooms provide comfortable stay with stunning panoramic views...
                    </p>

                    @include('components.booking-form')

                </div>
            </section>
        </div>

    </div>
</div>
@endsection

@push('styles')
<style>
    .room-carousel .item {
    padding: 10px;
}

.owl-nav button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: black !important;
    color: white !important;
    width: 45px;
    height: 45px;
    border-radius: 50%;
}
.owl-nav button:hover{
    background: #FFD700 !important;
    color: white !important;
}
.owl-prev { left: -25px; }
.owl-next { right: -25px; }
</style>

@endpush

@push('scripts')
<script>
$(document).ready(function(){
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

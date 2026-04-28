@extends('layouts.main')

@section('pageContent')

<div class="container py-5 mt-5">

    <div class="owl-carousel room-carousel mt-5">

        @forelse($rooms as $room)
        <div class="item">
            <section class="py-5">
                <div class="container">

                    <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #242423;">
                        {{ strtoupper($room->name) }}
                    </h6>

                    @php
                    $roomImages = $room->images ?? [];
                    $mainImage = $roomImages[0] ?? $room->image;
                    @endphp

                    <div class="row g-2 mb-4">
                        <div class="col-12">
                            @if($mainImage)
                            <img src="{{ asset('storage/' . $mainImage) }}" class="img-fluid w-100 rounded shadow-sm"
                                style="height:450px; object-fit:cover;">
                            @else
                            <img src="{{ asset('build/assets/img/double bed.jpg') }}"
                                class="img-fluid w-100 rounded shadow-sm" style="height:450px; object-fit:cover;">
                            @endif
                        </div>

                        @foreach(array_slice($roomImages, 0, 4) as $image)
                        <div class="col-3">
                            <img src="{{ asset('storage/' . $image) }}" class="img-fluid rounded shadow-sm"
                                style="height:100px; object-fit:cover;">
                        </div>
                        @endforeach
                    </div>

                    <p class="text-secondary">
                        {{ $room->description }}
                    </p>

                    @include('components.booking-form')

                </div>
            </section>
        </div>
        @empty
        <div class="item">
            <section class="py-5">
                <div class="container text-center">
                    <h6 class="text-uppercase mb-2" style="letter-spacing: 3px; color: #242423;">
                        NO ROOMS AVAILABLE
                    </h6>

                    <p class="text-secondary">
                        Rooms will be available soon.
                    </p>
                </div>
            </section>
        </div>
        @endforelse

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

.owl-nav button:hover {
    background: #FFD700 !important;
    color: white !important;
}

.owl-prev {
    left: -25px;
}

.owl-next {
    right: -25px;
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
@extends('layouts.main')

@section('pageContent')

<section id="about" class="about section text-dark mt-8">

  <div class="container">

    <div class="row position-relative">

      <!-- IMAGE -->
     <div class="col-lg-7 about-img zoom-in">
  <img src="{{ asset('build/assets/img/hotel.webp') }}" alt="hero" class="main-img rounded-2">

  <!-- Small overlapping image -->
  <img src="{{ asset('build/assets/img/family bed.jpg') }}" alt="room" class="overlay-img rounded-2">
</div>

      <!-- TEXT -->
      <div class="col-lg-7">
        <h2 class="inner-title" style="font-family: 'Playfair Display', serif;">The Galaxy Airport Hotel in Sri Lanka</h2>

        <div class="our-story">

          <h4 style=" color: #b6a234 !important;">Est 2024</h4>
          <h3 style="font-family: 'Playfair Display', serif;color: #000 !important;">Our Story</h3>

          <p>
            Galaxy Airport Hotel is a modern luxury hotel located in Sri Lanka, offering premium comfort and convenience for both business and leisure travelers.
            Situated near the airport, we provide easy access, elegant accommodation, and world-class hospitality designed to make every stay memorable.
          </p>

          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Located close to the airport for maximum convenience</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Luxury rooms with modern amenities and comfort</span></li>
            <li><i class="bi bi-check-circle"></i> <span>24/7 customer service and professional hospitality</span></li>
          </ul>

          <p>
            We aim to provide a relaxing and comfortable stay with high-quality service, modern facilities, and a peaceful environment.
            Whether you are traveling for business or vacation, Galaxy Airport Hotel ensures a smooth and enjoyable experience in Sri Lanka.
          </p>

            </div>
        </div>

    </div>

  </div>

</section>

@endsection


@push('styles')

<style>
    .about .about-img {
  position: relative;
}

/* Main image */
.about .about-img .main-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Overlay image (bottom-left) */
.about .about-img .overlay-img {
  position: absolute;
  top: 70%;
  bottom: -40px;
  left: -30px;
  width: 200px;
  height: 250px;
  object-fit: cover;
  box-shadow: 0 10px 25px rgba(0,0,0,0.3);
  z-index: 2;
}
.inner-title {
  position: relative;
  z-index: 5;
  color: #000 !important;
  opacity: 1 !important;
  visibility: visible !important;
  display: block;
  font-size: 2.75rem!important;
  font-weight: 700!important;
  margin: 30px 0!important;

}

.about h2 {
  color: var(--heading-color);

}
.about{
    padding: 150px 0; /* top padding fixes navbar overlap */
}

@media (max-width: 575px) {
  .hero .stat-item {
    padding: 1.5rem;
  }
}

@media (min-width: 991px) {
  .about .inner-title {
    max-width: 65%;
    margin: 0 0 80px 0;
  }
}

.about .our-story {
  padding: 40px;
 background-color: color-mix(in srgb, #b6a234 4%, transparent);

}

@media (min-width: 991px) {
  .about .our-story {
    padding-right: 35%;
  }
}

.about .our-story h4 {
  text-transform: uppercase;
  font-size: 1.1rem;
  color: color-mix(in srgb, var(--default-color), transparent 50%);
}

.about .our-story h3 {
  font-size: 2.25rem;
  font-weight: 700;
  color: color-mix(in srgb, var(--default-color), transparent 20%);
}

.about .our-story p:last-child {
  margin-bottom: 0;
}

.about ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.about ul li {
  padding: 5px 0;
  display: flex;
  align-items: center;
}

.about ul i {
  font-size: 1.25rem;
  margin-right: 0.5rem;
  line-height: 1.2;
  color: var(--accent-color);
}

.about .about-img {
  min-height: 400px;
  position: relative;
}

@media (min-width: 992px) {
  .about .about-img {
    position: absolute;
    top: 0;
    right: 0;
    min-height: 600px;
  }
}

.about .about-img img {
  position: absolute;
  inset: 0;
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  z-index: 1;
}
.inner-title {
  color: #000; /* or #fff depending on background */
}

</style>
@endpush

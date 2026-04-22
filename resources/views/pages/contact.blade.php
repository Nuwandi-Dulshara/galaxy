@extends('layouts.main')

@section('pageContent')

<section class="contact " id="contact">


  <div class="container mt-5" >

    <div class="row gy-4">

      <div class="col-lg-6  col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center rounded" data-aos="fade-up" data-aos-delay="200">
          <i class='bx bxs-edit-location' ></i>
          <h3 class="mt-3">Address</h3>
          <p> No.433/3/B, Kimbulapitiya estate, Kimbulapitiya Rd, Negombo</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center rounded" data-aos="fade-up" data-aos-delay="300">
          <i class='bx bxs-phone-call'></i>
          <h3 class="mt-3">Call Us</h3>
          <p>+94 751800393</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center rounded" data-aos="fade-up" data-aos-delay="400">
          <i class='bx bxs-envelope  '></i>
          <h3 class="mt-3">Email Us</h3>
          <p>info@galaxyairporthotel.com</p>
        </div>
      </div>

    </div>

    </div>

    <div class="container mt-3">
    <div class="row gy-4 ">

      <div class="col-lg-6 col-md-12 col-12">

    <iframe
    src="https://maps.google.com/maps?q=No.433/3/B%20Kimbulapitiya%20estate%20Kimbulapitiya%20Rd%20Negombo&t=&z=15&ie=UTF8&iwloc=&output=embed"
    width="100%"
    height="400"
    style="border:0;"
    allowfullscreen=""
    loading="lazy">
    </iframe>

      </div>

      <div class="col-lg-6 col-md-12 col-12">
        <div class="p-4  custom-border-radius shadow rounded mt-2" style="background-color: #ffffff;box-shadow: 0 2px 10px rgba(0, 0, 0, 0.541);">
        <form action="php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="d-flex justify-content-center">
              <a href="#" class="btn btn-cta me-2 " role="button">Send Message</a>
            </div>



          </div>
        </form>

      </div>


    </div>

  </div>
  </div>
</section>

@endsection

@push('styles')

<style>
/* Contact Section */
.contact {
  padding: 120px 0 60px; /* top padding fixes navbar overlap */
}

.contact .section-title h2 {
  font-size: 36px;
  font-weight: bold;
  text-align: center;
  color:var(--heading-color);
}

.contact .section-title p {
  text-align: center;
  color: var(--default-color);
  font-size: 16px;
  margin-top: 10px;
}

.contact .info-item i {
  font-size: 30px;
  color: #b6a234;
  margin-right: 20px;

  width: 60px;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: center;

  border-radius: 50%;
  border: 2px solid rgba(182, 162, 52, 0.5); /* 50% color */
}

.contact .info-item:hover {
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}

.contact .info-item i {
  font-size: 30px;
  color: #b6a234;
  margin-right: 20px;
}

.contact .info-item h3 {
  font-size: 18px;
  color: #333;
}

.contact .info-item p {
  color: #555;
}

.contact .php-email-form {
  background-color: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.contact .form-control {
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 12px;
  width: 100%;
  margin-bottom: 15px;
}

.contact .form-control:focus {
  border-color: var(--accent-color);
  outline: none;
}

.contact button {
  background-color: var(--accent-color);
  color: #fff;
  border: none;
  padding: 12px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.contact button:hover {
  background-color: var(--accent-color);
}

.contact .loading,
.contact .error-message,
.contact .sent-message {
  display: none;
}

.contact .sent-message {
  color:var(--accent-color);
}

.contact .error-message {
  color: #f44336;
}
.btn-cta {
  background-color: #b6a234;
  color: #fff;
  padding: 10px 25px;
  border: none;
  transition: 0.3s ease;
}

.btn-cta:hover {
  background-color: #b6a234;
  color: #fff;
}
</style>

@endpush

@extends('layouts.main')

@section('pageContent')


<section class="offer-section py-5 mt-5">
  <div class="container">
{{--  1st offer  --}}
    <div class="row align-items-center bg-white shadow rounded-4 p-3 mt-5" >

      <!-- Left Side (Room Image + Details) -->
      <div class="col-lg-8">
        <div class="row align-items-center">

          <!-- Image -->
          <div class="col-md-6">
            <img src="{{ asset('build/assets/img/single room.jpg') }}"
                 class="img-fluid rounded-4" alt="Room">
          </div>

          <!-- Details -->
          <div class="col-md-6">
            <h4 class="fw-bold mt-3 mt-md-0">Standard Double</h4>
            <p class="text-muted mb-2">Breakfast included &nbsp; ✔ Free cancellation</p>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <h4 class="fw-bold text-dark">USD 99.18</h4>
                <button class="btn btn-custom px-4 rounded-pill text-white"
                        onclick="openBooking('Standard Double', 99.18)">
                Book Now</button>
                </button> 
            </div>
          </div>

        </div>
      </div>

      <!-- Right Side (Offer Box) -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="offer-box text-center p-4 rounded-4 shadow-sm">

          <h6 class="text-white">Discount available</h6>
          <small class="text-white d-block mb-3">12–13 Sep 2025, 2 adults</small>

          <div class="bg-white rounded-pill px-3 py-2 mb-3 d-flex justify-content-between">
            <span class="text-dark">Original price</span>
            <strong class="text-dark">$99.18</strong>
          </div>

          <div class="text-start small mb-3">
            <div class="d-flex justify-content-between">
              <span>Free Wifi</span><span>$99.06</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>Lunch,breakfast free</span><span>$98.20</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>for single bed room</span><span>$97.55</span>
            </div>
          </div>

       <button class="btn btn-discount w-100 rounded-pill"
                onclick="openBooking('Standard Double', 99.18)">
                Apply 50% discount
        </button>

          <small class="d-block mt-2 text-muted">Verified by TRIPTEASE</small>

        </div>
      </div>

    </div>
{{--  2nd offers  --}}
        <div class="row align-items-center bg-white shadow rounded-4 p-3 mt-5" >

      <!-- Left Side (Room Image + Details) -->
      <div class="col-lg-8">
        <div class="row align-items-center">

          <!-- Image -->
          <div class="col-md-6">
            <img src="{{ asset('build/assets/img/hotel.webp') }}"
                 class="img-fluid rounded-4" alt="Room">
          </div>

          <!-- Details -->
          <div class="col-md-6">
            <h4 class="fw-bold mt-3 mt-md-0">Standard Double</h4>
            <p class="text-muted mb-2">Breakfast included &nbsp; ✔ Free cancellation</p>

            <div class="d-flex justify-content-between align-items-center mt-3">
              <h4 class="fw-bold text-dark">USD 99.18</h4>
                <button class="btn btn-custom px-4 rounded-pill text-white"
                        onclick="openBooking('Standard Double', 99.18)">
                Book Now</button>
                </button>     
           </div>
          </div>

        </div>
      </div>

      <!-- Right Side (Offer Box) -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="offer-box text-center p-4 rounded-4 shadow-sm">

          <h6 class="text-white">Discount available</h6>
          <small class="text-white d-block mb-3">12–13 Sep 2025, 2 adults</small>

          <div class="bg-white rounded-pill px-3 py-2 mb-3 d-flex justify-content-between">
            <span class="text-dark">Original price</span>
            <strong class="">$99.18</strong>
          </div>

          <div class="text-start small mb-3">
            <div class="d-flex justify-content-between">
              <span>Free Wifi</span><span>$99.06</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>Lunch,breakfast free</span><span>$98.20</span>
            </div>
            <div class="d-flex justify-content-between">
              <span>for single bed room</span><span>$97.55</span>
            </div>
          </div>

       <button class="btn btn-discount w-100 rounded-pill"
                onclick="openBooking('Standard Double', 99.18)">
                Apply 50% discount
        </button>

          <small class="d-block mt-2 text-muted">Verified by TRIPTEASE</small>

        </div>
      </div>

    </div>


  </div>
</section>

<!-- Booking / Discount Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 overflow-hidden">

      <div class="row g-0">

        <!-- LEFT SIDE IMAGE -->
        <div class="col-md-5 d-none d-md-block">
          <img src="{{ asset('build/assets/img/hotel.webp') }}" 
               id="modalImage"
               class="img-fluid h-100 w-100 object-fit-cover" 
               alt="Room">
        </div>

        <!-- RIGHT SIDE FORM -->
        <div class="col-md-7">
          <div class="modal-header border-0">
            <h5 class="modal-title text-dark text-center">Booking Form</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>

          <div class="modal-body">

            <form id="bookingForm">

              <div class="mb-3">
                <label class="form-label">Room Type</label>
                <input type="text" id="roomType" class="form-control" readonly>
              </div>

              <div class="mb-3">
                <label class="form-label">Original Price</label>
                <input type="text" id="originalPrice" class="form-control" readonly>
              </div>

              <div class="mb-3">
                <label class="form-label">Discount (%)</label>
                <input type="number" id="discount" class="form-control" value="0">
              </div>

              <div class="mb-3">
                <label class="form-label">Final Price</label>
                <input type="text" id="finalPrice" class="form-control" readonly>
              </div>

              <button type="submit" class="btn btn-dark w-100 rounded-pill">
                Confirm Booking
              </button>

            </form>

          </div>
        </div>

      </div>

    </div>
  </div>
</div>
@endsection

@push('styles')

<style>

.offer-section {
  background-color: #f8f9fa;
  padding: 200px 0 80px; /* top space pushes it below navbar */
}
.btn-custom {
  background-color: #c3a27d;
  color: rgb(252, 252, 252)5), 0, 0);
  border: none;
}

.btn-custom:hover {
  background-color: #b18f6c;
}

.offer-box {
  background-color: rgb(197, 161, 120);
}

.btn-discount {
  background-color: rgb(0, 0, 0);
  color: white;
  border: none;
}

.btn-discount:hover {
  background-color: #353535;
}
.form-label{
    color: #000 !important;
}
button:focus,
.btn:focus,
.btn-close:focus {
  box-shadow: none !important;
  outline: none !important;
}

.modal-lg {
  max-width: 800px; /* increase width */
}

.object-fit-cover {
  object-fit: cover;
}
</style>
    
@endpush

@push('scripts')

<script>
   
function openBooking(room, price) {

    document.getElementById("roomType").value = room;
    document.getElementById("originalPrice").value = price;

    document.getElementById("discount").value = 0;
    document.getElementById("finalPrice").value = price;

    var modal = new bootstrap.Modal(document.getElementById('bookingModal'));
    modal.show();

    // live discount calculation
    document.getElementById("discount").oninput = function () {
        let discount = this.value;
        let final = price - (price * discount / 100);
        document.getElementById("finalPrice").value = final.toFixed(2);
    }
}

</script>
    
@endpush

<div class="border-top pt-4">
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

    <form action="{{ route('bookings.store') }}" method="POST" novalidate>
        @csrf

        <div class="row g-3">
            {{-- Room Selection --}}
            <div class="col-lg-6">
                <label class="form-label">Room *</label>
                <select name="room_id" class="form-select" required>
                    <option value="">Select a room</option>
                    @foreach($rooms ?? [] as $room)
                    <option value="{{ $room->id }}" {{ old('room_id') == $room->id ? 'selected' : '' }}>
                        {{ $room->name }} (Capacity: {{ $room->capacity }}) - ${{ $room->price }}/night
                    </option>
                    @endforeach
                </select>
                @error('room_id')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Guest Name --}}
            <div class="col-lg-6">
                <label class="form-label">Guest Name *</label>
                <input type="text" name="guest_name" class="form-control" required minlength="2" maxlength="255"
                    value="{{ old('guest_name') }}" placeholder="Full name">
                @error('guest_name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Email --}}
            <div class="col-lg-6">
                <label class="form-label">Email *</label>
                <input type="email" name="guest_email" class="form-control" required maxlength="255"
                    value="{{ old('guest_email') }}" placeholder="your@email.com">
                @error('guest_email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Phone --}}
            <div class="col-lg-6">
                <label class="form-label">Phone</label>
                <input type="tel" name="guest_phone" class="form-control" maxlength="20"
                    value="{{ old('guest_phone') }}" placeholder="+1 (555) 123-4567">
                @error('guest_phone')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Arrival Date --}}
            <div class="col-lg-6">
                <label class="form-label">Arrival Date *</label>
                <input type="date" name="arrival_date" class="form-control" required
                    min="{{ now()->toDateString() }}"
                    max="{{ now()->addYear()->toDateString() }}"
                    value="{{ old('arrival_date') }}"
                    onchange="validateDates(this)">
                @error('arrival_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Departure Date --}}
            <div class="col-lg-6">
                <label class="form-label">Departure Date *</label>
                <input type="date" name="departure_date" class="form-control" required
                    min="{{ now()->toDateString() }}"
                    max="{{ now()->addYear()->toDateString() }}"
                    value="{{ old('departure_date') }}"
                    onchange="validateDates(this)">
                @error('departure_date')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Number of Guests --}}
            <div class="col-lg-6">
                <label class="form-label">Number of Guests *</label>
                <select name="guests" class="form-select" required>
                    <option value="">Select number of guests</option>
                    <option value="1" {{ old('guests') == '1' ? 'selected' : '' }}>1 guest</option>
                    <option value="2" {{ old('guests', '2') == '2' ? 'selected' : '' }}>2 guests</option>
                    <option value="3" {{ old('guests') == '3' ? 'selected' : '' }}>3 guests</option>
                    <option value="4" {{ old('guests') == '4' ? 'selected' : '' }}>4 guests</option>
                </select>
                @error('guests')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Special Requests --}}
            <div class="col-12">
                <label class="form-label">Special Requests</label>
                <textarea name="special_requests" class="form-control" rows="3" maxlength="500">{{ old('special_requests') }}</textarea>
                <small class="text-muted">Maximum 500 characters</small>
                @error('special_requests')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- Submit Button --}}
            <div class="col-12">
                <button type="submit" class="btn btn-dark w-100 fw-bold py-2">SUBMIT BOOKING REQUEST</button>
            </div>
        </div>
    </form>

    <script>
        function validateDates(input) {
            const form = input.closest('form');
            const arrivalInput = form.querySelector('input[name="arrival_date"]');
            const departureInput = form.querySelector('input[name="departure_date"]');

            if (arrivalInput.value && departureInput.value) {
                const arrival = new Date(arrivalInput.value);
                const departure = new Date(departureInput.value);

                if (departure <= arrival) {
                    departureInput.setCustomValidity('Departure date must be after arrival date');
                } else {
                    departureInput.setCustomValidity('');
                }
            }
        }
    </script>
</div>
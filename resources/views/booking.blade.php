@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-12 md:py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Book Your Ride</h1>
        <p class="text-xl opacity-90 max-w-2xl mx-auto">
            Safe, comfortable, and reliable transportation at your fingertips
        </p>
    </div>
</section>

<!-- Booking Form Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <!-- Form Header -->
            <div class="bg-blue-600 text-white px-6 py-4">
                <h2 class="text-xl font-bold">Reservation Details</h2>
                <p class="text-blue-100">Complete the form below to book your ride</p>
            </div>

            <!-- Success Message -->
            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mx-6 mt-4 rounded" role="alert">
                <div class="flex items-center">
                    <i class="fas fa-check-circle mr-2"></i>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
            @endif

            <!-- Booking Form -->
            <form method="POST" action="{{ route('booking.store') }}" class="p-6 md:p-8">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Personal Information -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Personal Information</h3>
                        
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
                            <input type="text" name="name" id="name" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                   required>
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                            <input type="tel" name="phone" id="phone" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                   placeholder="e.g. +254 700 123 456"
                                   required>
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email (Optional)</label>
                            <input type="email" name="email" id="email" 
                                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            @error('email')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Ride Details -->
                    <div class="space-y-4">
                        <h3 class="text-lg font-semibold text-gray-800 border-b pb-2">Ride Details</h3>
                        
                        <div>
                            <label for="service_type" class="block text-sm font-medium text-gray-700 mb-1">Service Type *</label>
                            <select name="service_type" id="service_type" 
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                    required>
                                <option value="">Select service...</option>
                                <option value="Local Rides">Local Rides</option>
                                <option value="Airport Transfer">Airport Transfer</option>
                                <option value="Intercity Travel">Intercity Travel</option>
                                <option value="Special Event">Special Event</option>
                                <option value="Corporate Travel">Corporate Travel</option>
                            </select>
                            @error('service_type')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="vehicle_type" class="block text-sm font-medium text-gray-700 mb-1">Vehicle Preference</label>
                            <select name="vehicle_type" id="vehicle_type" 
                                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                                <option value="">No preference</option>
                                <option value="Standard Sedan">Standard Sedan (1-3 passengers)</option>
                                <option value="Executive Sedan">Executive Sedan (1-3 passengers)</option>
                                <option value="SUV">SUV (1-5 passengers)</option>
                                <option value="Minivan">Minivan (1-7 passengers)</option>
                                <option value="Luxury Vehicle">Luxury Vehicle</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mt-6">
                    <!-- Pickup/Dropoff -->
                    <div>
                        <label for="pickup" class="block text-sm font-medium text-gray-700 mb-1">Pickup Location *</label>
                        <input type="text" name="pickup" id="pickup" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                               placeholder="Address, landmark, or airport"
                               required>
                        @error('pickup')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="dropoff" class="block text-sm font-medium text-gray-700 mb-1">Drop-off Location *</label>
                        <input type="text" name="dropoff" id="dropoff" 
                               class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                               placeholder="Address, landmark, or airport"
                               required>
                        @error('dropoff')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mt-6">
                    <!-- Date/Time/Passengers -->
                    <div>
                        <label for="datetime" class="block text-sm font-medium text-gray-700 mb-1">Pickup Date & Time *</label>
                        <input type="datetime-local" name="datetime" id="datetime" 
                               class="w-40 border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                               min="{{ date('Y-m-d\TH:i') }}"
                               required>
                        @error('datetime')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="people" class="block text-sm font-medium text-gray-700 mb-1">Passengers *</label>
                        <input type="number" name="people" id="people" min="1" max="10" 
                               class="w-40 border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                               required>
                        @error('people')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="luggage" class="block text-sm font-medium text-gray-700 mb-1">Luggage (Pieces)</label>
                        <input type="number" name="luggage" id="luggage" min="0" max="10" 
                               class="w-40 border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                    </div>
                </div>

                <!-- Special Instructions -->
                <div class="mt-6">
                    <label for="instructions" class="block text-sm font-medium text-gray-700 mb-1">Special Instructions</label>
                    <textarea name="instructions" id="instructions" rows="3" 
                              class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                              placeholder="Flight number, accessibility needs, etc."></textarea>
                </div>

                <!-- Form Footer -->
                <div class="mt-8 pt-6 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center">
                    <div class="text-sm text-gray-500 mb-4 sm:mb-0">
                        <i class="fas fa-lock mr-1"></i> Your information is secure and will not be shared
                    </div>
                    <button type="submit" 
                            class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i> Confirm Booking
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Why Book With Us -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Why Book With Noble Rides?</h2>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">Safe & Reliable</h3>
                <p class="text-gray-600">All drivers vetted and vehicles regularly inspected for your safety.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">On-Time Guarantee</h3>
                <p class="text-gray-600">We monitor traffic to ensure you arrive at your destination on schedule.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-lg font-semibold mb-2">24/7 Support</h3>
                <p class="text-gray-600">Our customer service team is always available to assist you.</p>
            </div>
        </div>
    </div>
</section>

<!-- Immediate Assistance CTA -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Need Immediate Assistance?</h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-6">
            Call us now for last-minute bookings or urgent inquiries
        </p>
        <a href="tel:+254758845811" 
           class="inline-block px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition">
            <i class="fas fa-phone-alt mr-2"></i> +254 758 845 811
        </a>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Set minimum datetime to current time
    document.addEventListener('DOMContentLoaded', function() {
        const now = new Date();
        // Add 30 minutes to current time as minimum booking time
        now.setMinutes(now.getMinutes() + 30);
        const minDateTime = now.toISOString().slice(0, 16);
        document.getElementById('datetime').min = minDateTime;
        
        // Phone number formatting
        const phoneInput = document.getElementById('phone');
        phoneInput.addEventListener('input', function(e) {
            const x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : x[1] + ' ' + x[2] + (x[3] ? ' ' + x[3] : '');
        });
    });
</script>
@endpush
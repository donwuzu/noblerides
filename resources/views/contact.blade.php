@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-10 md:py-16 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 text-center">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4">Get In Touch</h1>
        <p class="text-lg sm:text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
            We're here to help and answer any questions you may have
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-10 sm:py-14 md:py-16 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 md:gap-12 max-w-6xl mx-auto">
            <!-- Contact Form -->
            <div class="bg-white p-5 sm:p-6 md:p-8 rounded-xl shadow-md">
                <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 sm:mb-6">Send Us a Message</h2>
                
                @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 sm:p-4 mb-4 sm:mb-6 rounded">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
                @endif

                <form method="POST" action="{{ route('contact.submit') }}" class="space-y-4 sm:space-y-5 md:space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block font-medium text-gray-700 mb-1">Your Name</label>
                        <input type="text" name="name" id="name" 
                               class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2 sm:py-2.5 md:py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                               required>
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="email" class="block font-medium text-gray-700 mb-1">Email Address</label>
                        <input type="email" name="email" id="email" 
                               class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2 sm:py-2.5 md:py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                               required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="phone" class="block font-medium text-gray-700 mb-1">Phone Number </label>
                        <input type="tel" name="phone" id="phone" 
                               class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2 sm:py-2.5 md:py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                    </div>
                    
                    <div>
                        <label for="subject" class="block font-medium text-gray-700 mb-1">Subject</label>
                        <select name="subject" id="subject" 
                                class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2 sm:py-2.5 md:py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Booking Question">Booking Question</option>
                            <option value="Corporate Services">Corporate Services</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block font-medium text-gray-700 mb-1">Your Message</label>
                        <textarea name="message" id="message" rows="4" 
                                  class="w-full border border-gray-300 rounded-lg px-3 sm:px-4 py-2 sm:py-2.5 md:py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                  required></textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 sm:py-3 px-4 sm:px-6 rounded-lg transition flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="space-y-6 sm:space-y-8">
                <div class="bg-white p-5 sm:p-6 md:p-8 rounded-xl shadow-md">
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-800 mb-4 sm:mb-6">Contact Information</h2>
                    
                    <div class="space-y-4 sm:space-y-5 md:space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4">
                                <i class="fas fa-map-marker-alt text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Our Location</h3>
                                <p class="text-gray-600 text-sm sm:text-base">
                                    2nd Sunrise Avenue, Ruiru<br>Nairobi, Kenya
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4">
                                <i class="fas fa-phone-alt text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Phone Numbers</h3>
                                <p class="text-gray-600 text-sm sm:text-base">
                                    <a href="tel:+254758845811" class="hover:text-blue-600 transition">+254 758 845 811</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4">
                                <i class="fas fa-envelope text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Email Address</h3>
                                <p class="text-gray-600 text-sm sm:text-base">
                                    <a href="mailto:info@noblerides.co.ke" class="hover:text-blue-600 transition">info@noblerides.co.ke</a><br>
                                    <a href="mailto:bookings@noblerides.co.ke" class="hover:text-blue-600 transition">bookings@noblerides<br>.co.ke</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 sm:p-3 rounded-full mr-3 sm:mr-4">
                                <i class="fas fa-clock text-blue-600 text-lg sm:text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Working Hours</h3>
                                <p class="text-gray-600 text-sm sm:text-base">
                                    <span class="block">Monday - Friday: 7:00 AM - 10:00 PM</span>
                                    <span class="block">Saturday - Sunday: 8:00 AM - 11:00 PM</span>
                                    <span class="text-xs sm:text-sm text-blue-600">24/7 for airport transfers</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="bg-white py-6 sm:py-8">
    <div class="container mx-auto px-4 sm:px-6">
        <div class="aspect-w-16 aspect-h-9 w-full rounded-xl overflow-hidden shadow-md">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.2511852902595!2d36.962258537730136!3d-1.1570932603185136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f40ade15f41e1%3A0xc1c23ecd3f2cd283!2s2nd%20Sunrise%20Ave%2C%20Ruiru!5e0!3m2!1sen!2ske!4v1751890604052!5m2!1sen!2ske" 
                    class="w-full h-full" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-10 sm:py-14 bg-blue-600 text-white">
    <div class="container mx-auto px-4 sm:px-6 text-center">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-6">Need Immediate Assistance?</h2>
        <p class="text-base sm:text-lg md:text-xl mb-6 sm:mb-8 max-w-2xl mx-auto opacity-90">
            Call us now for urgent inquiries or last-minute bookings
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4">
            <a href="tel:+254758845811" 
               class="w-full sm:w-auto px-4 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition-all font-bold flex items-center justify-center gap-2">
                <i class="fas fa-phone-alt"></i> Call +254 758 845 811
            </a>
            <a href="https://wa.me/254758845811" 
               class="w-full sm:w-auto px-4 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-transparent border-2 border-white text-white rounded-lg hover:bg-white hover:text-blue-600 transition-all font-bold flex items-center justify-center gap-2">
                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
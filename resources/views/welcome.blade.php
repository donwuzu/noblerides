@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="relative py-16 md:py-24 bg-gradient-to-r from-blue-50 to-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
             <!-- Logo Image -->
            <div class="mb-6 flex justify-center">
                <img src="/images/noble.jpeg" alt="Noble Rides Logo" class="h-52 w-72">
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                <span class="text-blue-600">Noble Rides</span> - Premium Transportation
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                Experience luxury, safety, and reliability with our professional chauffeur services. 
                Whether for business or leisure, we ensure you arrive in style and on time.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="https://wa.me/254758845811" 
                   class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp"></i> Book on WhatsApp
                </a>
                <a href="{{ route('booking.create') }}" 
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all flex items-center justify-center gap-2">
                    <i class="fas fa-calendar-alt"></i> Online Booking
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Why Choose Noble Rides?</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            We redefine transportation with exceptional service standards
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Safe & Reliable</h3>
                <p class="text-gray-600">
                    Our vehicles undergo rigorous maintenance and our drivers are thoroughly vetted. 
                    Your safety is our top priority with 24/7 monitoring and support.
                </p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-user-tie text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Professional Chauffeurs</h3>
                <p class="text-gray-600">
                    Courteous, experienced drivers with extensive local knowledge. 
                    Trained in defensive driving and customer service excellence.
                </p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-clock text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">On-Time Guarantee</h3>
                <p class="text-gray-600">
                    98% on-time arrival rate with real-time tracking. 
                    We monitor traffic and adjust routes proactively to ensure punctuality.
                </p>
            </div>
            
            <!-- Feature 4 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-car text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Premium Fleet</h3>
                <p class="text-gray-600">
                    Late-model luxury sedans, SUVs, and vans. 
                    Immaculately clean with amenities like bottled water, and phone chargers.
                </p>
            </div>
            
            <!-- Feature 5 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-map-marked-alt text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">Citywide Coverage</h3>
                <p class="text-gray-600">
                    Serving all major areas with airport transfers, corporate travel, 
                    and special event transportation throughout the region.
                </p>
            </div>
            
            <!-- Feature 6 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-all">
                <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-headset text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-gray-800">24/7 Support</h3>
                <p class="text-gray-600">
                    Dedicated customer service team available around the clock. 
                    Instant booking confirmations and trip updates.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Service Types -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Our Services</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            Tailored transportation solutions for every need
        </p>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:w-1/3 bg-blue-600 flex items-center justify-center p-6">
                        <i class="fas fa-plane-departure text-white text-5xl"></i>
                    </div>
                    <div class="p-8 md:w-2/3">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Airport Transfers</h3>
                        <p class="text-gray-600 mb-4">
                            Stress-free airport transportation with flight tracking and meet-and-greet service. 
                            Available for all major airports with fixed pricing.
                        </p>
                        <a href="{{ route('services') }}#airport" class="text-blue-600 font-medium hover:text-blue-800">
                            Learn more <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:w-1/3 bg-blue-600 flex items-center justify-center p-6">
                        <i class="fas fa-briefcase text-white text-5xl"></i>
                    </div>
                    <div class="p-8 md:w-2/3">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Corporate Travel</h3>
                        <p class="text-gray-600 mb-4">
                            Professional transportation for business meetings, conferences, 
                            and executive travel with discretion and efficiency.
                        </p>
                        <a href="{{ route('services') }}#corporate" class="text-blue-600 font-medium hover:text-blue-800">
                            Learn more <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:w-1/3 bg-blue-600 flex items-center justify-center p-6">
                        <i class="fas fa-glass-cheers text-white text-5xl"></i>
                    </div>
                    <div class="p-8 md:w-2/3">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Special Events</h3>
                        <p class="text-gray-600 mb-4">
                            Weddings, proms, anniversaries and other celebrations. 
                            Arrive in style with our luxury vehicles and professional drivers.
                        </p>
                        <a href="{{ route('services') }}#events" class="text-blue-600 font-medium hover:text-blue-800">
                            Learn more <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all">
                <div class="md:flex">
                    <div class="md:flex-shrink-0 md:w-1/3 bg-blue-600 flex items-center justify-center p-6">
                        <i class="fas fa-city text-white text-5xl"></i>
                    </div>
                    <div class="p-8 md:w-2/3">
                        <h3 class="text-xl font-bold mb-3 text-gray-800">City Tours</h3>
                        <p class="text-gray-600 mb-4">
                            Custom sightseeing tours with knowledgeable drivers. 
                            Hourly rates available for shopping trips or exploring the city.
                        </p>
                        <a href="{{ route('services') }}#tours" class="text-blue-600 font-medium hover:text-blue-800">
                            Learn more <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">What Our Clients Say</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            Trusted by businesses and individuals across the region
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "The most reliable service I've ever used. My driver was early, professional, 
                    and the car was spotless. Will definitely use Noble Rides for all my airport transfers."
                </p>
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                        <span class="text-blue-600 font-bold">JD</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">James D.</h4>
                        <p class="text-gray-500 text-sm">Business Traveler</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Used Noble Rides for our wedding transportation and everything was perfect. 
                    The drivers were punctual and helped make our special day stress-free."
                </p>
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                        <span class="text-blue-600 font-bold">SM</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">Sarah M.</h4>
                        <p class="text-gray-500 text-sm">Wedding Client</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-gray-50 p-8 rounded-xl">
                <div class="flex items-center mb-4">
                    <div class="text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <p class="text-gray-600 mb-6 italic">
                    "Our corporate account with Noble Rides has simplified our executive transportation needs. 
                    Consistent quality and excellent customer service."
                </p>
                <div class="flex items-center">
                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mr-4">
                        <span class="text-blue-600 font-bold">AC</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800">Amanda C.</h4>
                        <p class="text-gray-500 text-sm">Corporate Client</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">Ready To Experience Premium Transportation?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Book your ride today and travel with confidence
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('booking.create') }}" 
               class="px-8 py-3 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition-all font-bold flex items-center justify-center gap-2">
                <i class="fas fa-calendar-alt"></i> Book Online Now
            </a>
            <a href="tel:+254758845811" 
               class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-lg hover:bg-white hover:text-blue-600 transition-all font-bold flex items-center justify-center gap-2">
                <i class="fas fa-phone-alt"></i> Call Us Now
            </a>
        </div>
    </div>
</section>
@endsection
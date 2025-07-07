@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-12 md:py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Our Premium Services</h1>
        <p class="text-xl md:text-2xl opacity-90 max-w-3xl mx-auto">
            Experience exceptional transportation tailored to your needs
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Comprehensive Transportation Solutions</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We offer a range of services designed to meet all your travel requirements
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Local Rides</h3>
                    <p class="text-gray-600 mb-4">
                        Quick and affordable rides within your city. Perfect for everyday commuting, 
                        shopping trips, and running errands with our reliable service.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Same-day booking available
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Fixed pricing with no surprises
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Professional local drivers
                        </li>
                    </ul>
                    <a href="{{ route('booking.create') }}" 
                       class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Book Local Ride
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-plane-departure text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Airport Transfers</h3>
                    <p class="text-gray-600 mb-4">
                        Reliable transportation to and from all major airports.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        
                        
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Meet-and-greet service
                        </li>
                       
                       
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Flight monitoring for delays
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            24/7 availability
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Fixed airport rates
                        </li>
                    </ul>
                    <a href="{{ route('booking.create') }}?service=airport" 
                       class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Book Airport Transfer
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-road text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Intercity Travel</h3>
                    <p class="text-gray-600 mb-4">
                        Comfortable and safe travel between cities with professional drivers 
                        who know the best routes and rest stops.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Door-to-door service
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Comfortable vehicles for long trips
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Flexible scheduling
                        </li>
                    </ul>
                    <a href="{{ route('booking.create') }}?service=intercity" 
                       class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Book Intercity Trip
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-glass-cheers text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Special Events</h3>
                    <p class="text-gray-600 mb-4">
                        Premium transportation for weddings, corporate events, proms, 
                        and other special occasions with customizable packages.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Luxury vehicle selection
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Professional chauffeurs
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Custom decoration options
                        </li>
                    </ul>
                    <a href="{{ route('booking.create') }}?service=events" 
                       class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Inquire About Events
                    </a>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-briefcase text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Corporate Travel</h3>
                    <p class="text-gray-600 mb-4">
                        Professional transportation solutions for businesses, including 
                        executive transfers, client pickups, and employee shuttles.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Discreet professional service
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Monthly billing available
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Priority booking
                        </li>
                    </ul>
                    <a href="{{ route('contact.show') }}" 
                       class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Contact for Corporate Rates
                    </a>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-city text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">City Tours</h3>
                    <p class="text-gray-600 mb-4">
                        Custom sightseeing experiences with knowledgeable drivers who can 
                        show you the best of the city at your own pace.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Flexible itineraries
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Multilingual drivers available
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Hourly rates
                        </li>
                    </ul>
                    <a href="{{ route('booking.create') }}?service=tours" 
                       class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                        Book a Tour
                    </a>
                </div>
            </div>

            <!-- Service 7 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition-all duration-300">
                <div class="h-48 bg-blue-100 flex items-center justify-center">
                    <i class="fas fa-school text-blue-600 text-5xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-3 text-gray-800">School Transportation</h3>
                    <p class="text-gray-600 mb-4">
                        Safe and reliable daily transportation for students with trained drivers and 
                        child-friendly vehicles equipped with safety features.
                    </p>
                    <ul class="text-gray-600 space-y-2 mb-4">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            GPS-tracked vehicles with live monitoring
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Certified child safety seats available
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Regular driver background checks
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-2"></i>
                            Flexible term contracts
                        </li>
                    </ul>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <a href="{{ route('booking.create') }}?service=school" 
                        class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition text-center">
                            Book School Service
                        </a>
                       
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>



<!-- CTA Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-6">Need a Custom Solution?</h2>
        <p class="text-xl mb-8 max-w-2xl mx-auto opacity-90">
            Contact us for special requests or large group transportation
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact.show') }}" 
               class="px-8 py-3 bg-white text-blue-600 rounded-lg hover:bg-gray-100 transition-all font-bold">
                Contact Our Team
            </a>
            <a href="tel:+254758845811" 
               class="px-8 py-3 bg-transparent border-2 border-white text-white rounded-lg hover:bg-white hover:text-blue-600 transition-all font-bold">
                <i class="fas fa-phone-alt mr-2"></i> Call Now
            </a>
        </div>
    </div>
</section>
@endsection
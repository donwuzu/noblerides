@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-800 to-blue-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Our Story</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto opacity-90">
            Redefining transportation with excellence, one ride at a time
        </p>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-12 bg-white transform skew-y-1 -mb-6"></div>
</section>

<!-- About Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">About Noble Rides</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Trusted transportation provider offering seamless ride experiences across cities
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Who We Are</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Founded in 2015, Noble Rides has grown from a small local service to a premier transportation provider serving thousands of satisfied customers annually. Our journey has been fueled by an unwavering commitment to exceptional service and customer satisfaction.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        With a fleet of late-model, well-maintained vehicles and professionally trained drivers, we ensure every journey is comfortable, safe, and worry-free. Our team undergoes rigorous background checks and continuous training to maintain our high standards.
                    </p>
                </div>
             <div class="bg-blue-100 rounded-xl h-60 w-100 flex items-center justify-center p-8">
                <div class="text-center">
                    <i class="fas fa-car text-blue-600 text-6xl mb-4  "></i>
                    
                </div>
            </div>


            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="order-last md:order-first">
                   <div class="bg-blue-100 rounded-xl h-60 w-100 flex items-center justify-center p-8">
                <div class="text-center">
                    <i class="fas fa-bus text-blue-600 text-6xl mb-4  "></i>
                    
                </div>
            </div>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Our Approach</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        We believe transportation should be more than just getting from point A to B. Our customer-first philosophy means we pay attention to every detail - from spotless vehicles to courteous drivers who know the best routes.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our innovative technology platform ensures real-time tracking, seamless booking, and transparent pricing. Whether you need a quick ride across town or specialized transportation services, we've got you covered.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Core Values</h2>
                <div class="w-24 h-1 bg-blue-600 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    The principles that guide everything we do
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-bullseye text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Our Mission</h3>
                    </div>
                    <p class="text-gray-600">
                        To redefine everyday transport with top-tier service, reliability, and trust. We're committed to making every journey exceptional through innovation, professionalism, and attention to detail.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="flex items-center mb-4">
                        <div class="bg-blue-100 p-3 rounded-full mr-4">
                            <i class="fas fa-eye text-blue-600 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Our Vision</h3>
                    </div>
                    <p class="text-gray-600">
                        To be the most reliable and preferred choice in personal and professional transportation across East Africa, setting industry standards for safety, comfort, and customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Stats Section -->
<section class="py-16 bg-blue-600 text-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 text-center">
            <div class="p-6">
                <div class="text-4xl font-bold mb-2">50+</div>
                <div class="text-lg">Happy Customers</div>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold mb-2">15+</div>
                <div class="text-lg">Professional Drivers</div>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold mb-2">8</div>
                <div class="text-lg">Cities Served</div>
            </div>
            <div class="p-6">
                <div class="text-4xl font-bold mb-2">24/7</div>
                <div class="text-lg">Service Availability</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Ready to Experience Noble Rides?</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-8">
            Join thousands of satisfied customers who trust us for their transportation needs
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('booking.create') }}" 
               class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-bold">
                Book Your Ride Now
            </a>
            <a href="{{ route('contact.show') }}" 
               class="px-8 py-3 bg-white border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition font-bold">
                Contact Our Team
            </a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.guest')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-800 to-blue-600 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">DRIVEN BY DISTINCTION</h1>
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
                        At Noble Rides, we are committed to growing responsibly, investing in people, and delivering transport solutions that reflect quality, efficiency, and respect.
                        We are more than a ride — we are your trusted travel partner.
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
                        Noble Rides exists to redefine the standard of executive and everyday transport in Kenya by offering safe, punctual, and comfortable services to individuals, families, corporates, and travel partners.
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
    
    <ul class="text-left max-w-2xl mx-auto text-xl text-gray-600 list-disc list-inside space-y-2">
        <li><strong>Professionalism</strong> – We do things the right way, always.</li>
        <li><strong>Safety</strong> – Our riders and drivers come first.</li>
        <li><strong>Reliability</strong> – We are there when we say we will be.</li>
        <li><strong>Excellence</strong> – We aim higher than expectations.</li>
        <li><strong>Integrity</strong> – We operate with honesty and transparency.</li>
        <li><strong>Customer-Centricity</strong> – We serve with intention and care.</li>
        <li><strong>Innovation</strong> – We use smart tools to improve every experience.</li>
    </ul>
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
                        To deliver exceptional transport services through a modern fleet, professional drivers, and a commitment to comfort, punctuality, and client satisfaction — one ride at a time.
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
                        To become East Africa’s most trusted and preferred provider of premium, reliable, and safe executive transport solutions.
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
                <div class="text-4xl font-bold mb-2">5+</div>
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
            Join hundreds of satisfied customers who trust us for their transportation needs
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
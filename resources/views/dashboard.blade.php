<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Noble Rides Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Card -->
            <div class="bg-white shadow-lg rounded-xl p-6 transition-all duration-300 hover:shadow-xl">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-blue-100 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Welcome, {{ Auth::user()->name }} 👋</h3>
                        <p class="text-gray-600 mt-1">Manage your bookings, check ride stats, and grow with Noble Rides.</p>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                <!-- Total Bookings Card -->
                <a href="{{ route('admin.bookings') }}" class="group block bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-blue-100 mr-4 group-hover:bg-blue-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-700 text-sm font-semibold">Total Bookings</h4>
                                <p class="text-3xl text-blue-800 font-bold mt-2">{{ $totalBookings }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-flex items-center text-sm text-blue-600 font-medium group-hover:text-blue-800 transition-colors duration-300">
                            View all bookings
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>

                <!-- Messages Card -->
                <a href="{{ route('admin.messages') }}" class="group block bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-green-100 mr-4 group-hover:bg-green-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-700 text-sm font-semibold">Messages via Contact</h4>
                                <p class="text-3xl text-green-800 font-bold mt-2">{{ $totalMessages }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-flex items-center text-sm text-green-600 font-medium group-hover:text-green-800 transition-colors duration-300">
                            View all messages
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>

                <!-- Recent Booking Card -->
                <a href="{{ route('admin.bookings') }}" class="group block bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-lg bg-yellow-100 mr-4 group-hover:bg-yellow-200 transition-colors duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-gray-700 text-sm font-semibold">Recent Booking</h4>
                                <p class="text-md text-yellow-800 font-medium mt-2">
                                    @if($bookings->first())
                                        {{ $bookings->first()->name }} — {{ $bookings->first()->service_type }}
                                    @else
                                        No bookings yet.
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 pb-4">
                        <span class="inline-flex items-center text-sm text-yellow-600 font-medium group-hover:text-yellow-800 transition-colors duration-300">
                            View bookings
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white shadow-lg rounded-xl p-6 transition-all duration-300 hover:shadow-xl">
                <h4 class="text-lg font-bold mb-4 text-gray-800">Quick Actions</h4>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('booking.create') }}" class="flex items-center px-5 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white rounded-lg shadow hover:shadow-md transition-all duration-300 hover:from-green-700 hover:to-green-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        New Booking
                    </a>
                    <a href="{{ route('services') }}" class="flex items-center px-5 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-lg shadow hover:shadow-md transition-all duration-300 hover:from-blue-700 hover:to-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        View Services
                    </a>
                    <a href="{{ route('contact.show') }}" class="flex items-center px-5 py-3 bg-gradient-to-r from-yellow-600 to-yellow-700 text-white rounded-lg shadow hover:shadow-md transition-all duration-300 hover:from-yellow-700 hover:to-yellow-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
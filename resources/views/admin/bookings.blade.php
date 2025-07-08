<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-800 leading-tight">
                {{ __('All Bookings') }}
            </h2>
            <div class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                <span class="font-medium">{{ $bookings->total() }}</span> total bookings
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                   <thead class="bg-blue-900 text-white text-sm uppercase font-semibold tracking-wide">
                        <tr>
                            <th class="px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Name</th>
                            <th class="px-4 py-3 text-left">Email</th>
                            <th class="px-4 py-3 text-left">Phone</th>
                            <th class="px-4 py-3 text-left">Pickup</th>
                            <th class="px-4 py-3 text-left">Dropoff</th>
                            <th class="px-4 py-3 text-left">Date & Time</th>
                            <th class="px-4 py-3 text-left">Service</th>
                            <th class="px-4 py-3 text-left">Vehicle</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                        </thead>

                    <tbody class="bg-white divide-y divide-gray-100">
                        @foreach ($bookings as $index => $booking)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-4 py-3 text-sm text-gray-500">{{ $loop->iteration + (($bookings->currentPage() - 1) * $bookings->perPage()) }}</td>
                            <td class="px-4 py-3 font-medium text-gray-800">{{ $booking->name }}</td>
                            <td class="px-4 py-3 text-gray-600 text-sm">{{ $booking->email ?? '—' }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">
                                <a href="tel:{{ $booking->phone }}" class="hover:text-blue-700 underline">{{ $booking->phone }}</a>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $booking->pickup }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $booking->dropoff }}</td>
                            <td class="px-4 py-3 text-sm text-gray-600">{{ \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') }}</td>
                          
                        <td class="px-4 py-3 text-sm text-gray-600">  {{ $booking->service_type }} </td>
                         
                            <td class="px-4 py-3 text-sm text-gray-600">{{ $booking->vehicle_type ?? '—' }}</td>
                            <td class="px-4 py-3 text-sm text-center">
                             <div class="flex items-center justify-center gap-2">
    <!-- Accept -->
    <a href="mailto:{{ $booking->email }}?subject=Your Booking with Noble Rides is Confirmed&body=Dear {{ urlencode($booking->name) }},%0D%0A%0D%0AWe are pleased to confirm your ride from {{ urlencode($booking->pickup) }} to {{ urlencode($booking->dropoff) }} on {{ urlencode(\Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A')) }}.%0D%0A%0D%0AThank you for choosing Noble Rides.%0D%0A%0D%0ARegards,%0D%0ANoble Rides Team"
       title="Accept"
       class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 text-xs rounded-lg shadow">
        Accept
    </a>

    <!-- Cancel -->
    <a href="mailto:{{ $booking->email }}?subject=Your Booking with Noble Rides was Cancelled&body=Dear {{ urlencode($booking->name) }},%0D%0A%0D%0AWe regret to inform you that your booking from {{ urlencode($booking->pickup) }} to {{ urlencode($booking->dropoff) }} on {{ urlencode(\Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A')) }} has been cancelled.%0D%0A%0D%0AFor assistance, contact us via WhatsApp or call.%0D%0A%0D%0ASorry for the inconvenience.%0D%0A%0D%0ARegards,%0D%0ANoble Rides Team"
       title="Cancel"
       class=" text-red px-3 py-1 text-xs rounded-lg shadow">
        Cancel
    </a>
</div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 px-4 py-3 bg-white">
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

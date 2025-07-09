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
            <table class="w-full divide-y divide-gray-200">
                <thead class="hidden sm:table-header-group bg-blue-900 text-white text-sm uppercase font-semibold tracking-wide">
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

                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($bookings as $index => $booking)
                    <tr class="hover:bg-gray-50 transition">
                        <!-- Mobile View (Card Layout) -->
                      <td class="sm:hidden px-4 py-3">
    <div class="space-y-2">
        <div class="flex justify-between items-start">
            <span class="font-medium text-gray-800">{{ $loop->iteration + (($bookings->currentPage() - 1) * $bookings->perPage()) }}. {{ $booking->name }}</span>
            <span class="text-xs text-gray-500">{{ \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') }}</span>
        </div>
        
        <div class="text-sm space-y-1">
            <div><a href="tel:{{ $booking->phone }}" class="text-blue-600 hover:underline">{{ $booking->phone }}</a></div>
            @if($booking->email)
                <div><a href="mailto:{{ $booking->email }}" class="text-blue-600 hover:underline">{{ $booking->email }}</a></div>
            @endif
            <div><span class="font-medium">Pickup:</span> {{ $booking->pickup }}</div>
            <div><span class="font-medium">Dropoff:</span> {{ $booking->dropoff }}</div>
            <div><span class="font-medium">Service:</span> {{ $booking->service_type }}</div>
            @if($booking->vehicle_type)
                <div><span class="font-medium">Vehicle:</span> {{ $booking->vehicle_type }}</div>
            @endif
        </div>
        
        <div class="pt-2 grid grid-cols-3 gap-2">
            <!-- Accept Button -->
            <a href="mailto:{{ $booking->email }}?subject={{ rawurlencode('Your Booking with Noble Rides is Confirmed') }}&body={{ rawurlencode("Dear {$booking->name},\n\nWe're pleased to confirm your ride from {$booking->pickup} to {$booking->dropoff} on " . \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') . ".\n\nThank you for choosing Noble Rides.\n\nBest regards,\nNoble Rides Team") }}"
               class="bg-green-500 hover:bg-green-600 text-white px-2 py-1.5 rounded-lg shadow text-center text-xs transition-colors duration-200">
                Accept
            </a>
            
            <!-- Cancel Button -->
            <a href="mailto:{{ $booking->email }}?subject={{ rawurlencode('Your Booking with Noble Rides was Cancelled') }}&body={{ rawurlencode("Dear {$booking->name},\n\nWe regret to inform you that your ride from {$booking->pickup} to {$booking->dropoff} scheduled for " . \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') . " has been cancelled.\n\nIf you need assistance, feel free to contact us via WhatsApp or phone.\n\nWe sincerely apologize for the inconvenience.\n\nBest regards,\nNoble Rides Team") }}"
               class="bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1.5 rounded-lg shadow text-center text-xs transition-colors duration-200">
                Cancel
            </a>
            
            <!-- Delete Button -->
            <form method="POST" action="{{ route('admin.bookings.destroy', $booking->id) }}" onsubmit="return confirm('Are you sure you want to delete this booking?');" class="m-0">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="w-full bg-red-500 hover:bg-red-600 text-white px-2 py-1.5 rounded-lg shadow text-xs transition-colors duration-200">
                    Delete
                </button>
            </form>
        </div>
    </div>
</td>
                        
                        <!-- Desktop View -->
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-500 align-top">{{ $loop->iteration + (($bookings->currentPage() - 1) * $bookings->perPage()) }}</td>
                        <td class="hidden sm:table-cell px-4 py-3 font-medium text-gray-800 align-top">{{ $booking->name }}</td>
                        <td class="hidden sm:table-cell px-4 py-3 text-gray-600 text-sm align-top">
                            @if($booking->email)
                                <a href="mailto:{{ $booking->email }}" class="hover:text-blue-700 underline">{{ $booking->email }}</a>
                            @else
                                —
                            @endif
                        </td>
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-600 align-top">
                            <a href="tel:{{ $booking->phone }}" class="hover:text-blue-700 underline">{{ $booking->phone }}</a>
                        </td>
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-600 align-top">{{ $booking->pickup }}</td>
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-600 align-top">{{ $booking->dropoff }}</td>
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-600 align-top">{{ \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') }}</td>
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-600 align-top">{{ $booking->service_type }}</td>
                        <td class="hidden sm:table-cell px-4 py-3 text-sm text-gray-600 align-top">{{ $booking->vehicle_type ?? '—' }}</td>
                   <td class="hidden sm:table-cell px-4 py-3 text-sm text-center align-top">
    <div class="flex items-center justify-center gap-2">
        <!-- Accept Button -->
        <a href="mailto:{{ $booking->email }}?subject={{ rawurlencode('Your Booking with Noble Rides is Confirmed') }}&body={{ rawurlencode("Dear {$booking->name},\n\nWe're pleased to confirm your ride from {$booking->pickup} to {$booking->dropoff} on " . \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') . ".\n\nThank you for choosing Noble Rides.\n\nBest regards,\nNoble Rides Team") }}"
           title="Accept"
           class="bg-green-500 hover:bg-green-600 text-white px-3 py-1.5 text-xs rounded-lg shadow transition-colors duration-200">
            Accept
        </a>
        
        <!-- Cancel Button -->
        <a href="mailto:{{ $booking->email }}?subject={{ rawurlencode('Your Booking with Noble Rides was Cancelled') }}&body={{ rawurlencode("Dear {$booking->name},\n\nWe regret to inform you that your ride from {$booking->pickup} to {$booking->dropoff} scheduled for " . \Carbon\Carbon::parse($booking->datetime)->format('d M Y, h:i A') . " has been cancelled.\n\nIf you need assistance, feel free to contact us via WhatsApp or phone.\n\nWe sincerely apologize for the inconvenience.\n\nBest regards,\nNoble Rides Team") }}"
           title="Cancel"
           class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1.5 text-xs rounded-lg shadow transition-colors duration-200">
            Cancel
        </a>
        
        <!-- Delete Button -->
        <form method="POST" action="{{ route('admin.bookings.destroy', $booking->id) }}" onsubmit="return confirm('Are you sure you want to delete this booking?');" class="m-0">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    title="Delete"
                    class="bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 text-xs rounded-lg shadow transition-colors duration-200">
                Delete
            </button>
        </form>
    </div>
</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 px-4 py-3 bg-white border-t border-gray-200">
            {{ $bookings->links() }}
        </div>
    </div>
</div>
</x-app-layout>

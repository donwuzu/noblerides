<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-800 leading-tight">
                {{ __('Contact Messages') }}
            </h2>
            <div class="text-sm text-blue-600 hover:text-blue-800 transition-colors">
                <span class="font-medium">{{ $messages->total() }}</span> total messages
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-800 text-gray-800 text-xs uppercase tracking-wider">
                        <tr>
                           <th class="text-gray-500 px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Name</th>
                            <th class="px-4 py-3 text-left">Email</th>
                            <th class="px-4 py-3 text-left">Phone</th>
                            <th class="px-4 py-3 text-left">Subject</th>
                            <th class="px-4 py-3 text-left">Message</th>
                            <th class="px-4 py-3 text-left">Received</th>
                            <th class="px-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                  <tbody class="bg-white divide-y divide-gray-100 text-gray-800">
@foreach ($messages as $index => $msg)
<tr class="hover:bg-gray-50 transition" x-data="{ open: false }">
    <td class="px-4 py-3 text-sm text-gray-500">{{ $loop->iteration }}</td>
    <td class="px-4 py-3 font-medium">{{ $msg->name }}</td>
    <td class="px-4 py-3">
        <a href="mailto:{{ $msg->email }}" class="text-blue-600 hover:underline">{{ $msg->email }}</a>
    </td>
    <td class="px-4 py-3">
        @if ($msg->phone)
            <a href="tel:{{ $msg->phone }}" class="hover:underline text-blue-600">{{ $msg->phone }}</a>
        @else
            <span class="text-gray-400">—</span>
        @endif
    </td>
    <td class="px-4 py-3">{{ $msg->subject ?? '—' }}</td>
    <td class="px-4 py-3 truncate max-w-xs" title="{{ $msg->message }}">
        {{ \Illuminate\Support\Str::limit($msg->message, 50) }}
    </td>
    <td class="px-4 py-3 text-sm">{{ $msg->created_at->format('d M Y, h:i A') }}</td>
<td class="px-4 py-3 text-center">
    <div class="flex justify-center gap-2">
        <!-- Reply Button -->
        <a href="mailto:{{ $msg->email }}?subject=Re: {{ $msg->subject }} (Ref: MSG-{{ $msg->id }})&body=Dear {{ $msg->name }},%0D%0A%0D%0AThank you for contacting Noble Rides.%0D%0A%0D%0AWe appreciate your message regarding: {{ $msg->subject }}.%0D%0A%0D%0AHere is our response:%0D%0A%0D%0A--------------------------------------------------%0D%0A[Type your response here]%0D%0A--------------------------------------------------%0D%0A%0D%0AYour original message:%0D%0A{{ $msg->message }}%0D%0A%0D%0AFor further assistance, contact us at:%0D%0AEmail: support@noblerides.com%0D%0APhone: +1 (555) 123-4567%0D%0A%0D%0ABest regards,%0D%0ANoble Rides Support Team"
           class="bg-green-500 hover:bg-green-700 text-white px-4 py-2 text-sm rounded-lg shadow-md transition-colors duration-200">
            Reply
        </a>

        <!-- Delete Button -->
        <form method="POST" action="{{ route('admin.messages.destroy', $msg->id) }}" onsubmit="return confirm('Are you sure you want to delete this message?');">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    class=" text-black px-4 py-2 text-sm rounded-lg shadow-md transition-colors duration-200">
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
        </div>

        <div class="mt-6 px-4 py-3 bg-white shadow rounded">
            {{ $messages->links() }}
        </div>
    </div>
</x-app-layout>

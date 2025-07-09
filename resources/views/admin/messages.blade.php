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

  <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700">
                <thead class="hidden sm:table-header-group bg-blue-800 text-white uppercase text-xs font-bold">
                    <tr>
                        <th class="px-4 sm:px-6 py-3">#</th>
                        <th class="px-4 sm:px-6 py-3">Name</th>
                        <th class="px-4 sm:px-6 py-3">Email</th>
                        <th class="px-4 sm:px-6 py-3">Phone</th>
                        <th class="px-4 sm:px-6 py-3">Subject</th>
                        <th class="px-4 sm:px-6 py-3">Message</th>
                        <th class="px-4 sm:px-6 py-3">Received</th>
                        <th class="px-4 sm:px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($messages as $index => $msg)
                        <tr class="hover:bg-gray-50 transition-all">
                            <!-- Mobile First Column (shows all data in a card-like format) -->
                            <td class="sm:hidden px-4 py-3">
                                <div class="space-y-1">
                                    <div class="flex items-center justify-between">
                                        <span class="text-gray-500 font-medium">{{ $loop->iteration }}. {{ $msg->name }}</span>
                                        <span class="text-xs text-gray-500">{{ $msg->created_at->format('d M Y, h:i A') }}</span>
                                    </div>
                                    <div class="text-sm">
                                        <a href="mailto:{{ $msg->email }}" class="text-blue-600 hover:underline block">{{ $msg->email }}</a>
                                        @if ($msg->phone)
                                            <a href="tel:{{ $msg->email }}" class="text-blue-600 hover:underline block">{{ $msg->phone }}</a>
                                        @else
                                            <span class="text-gray-400 italic">No phone provided</span>
                                        @endif
                                    </div>
                                    <div class="text-sm font-medium">{{ $msg->subject ?? '—' }}</div>
                                    <div class="text-sm text-gray-600">{{ \Illuminate\Support\Str::limit($msg->message, 100) }}</div>
                                    <div class="pt-2 flex space-x-2">
                                        <a href="mailto:{{ $msg->email }}?subject={{ rawurlencode('Re: ' . $msg->subject) }}&body={{ rawurlencode("Dear {$msg->name},\n\nThank you for contacting Noble Rides.\n\nWe appreciate your message regarding: {$msg->subject}.\n\nHere is our response:\n\n--------------------------------------------------\n[Type your response here]\n--------------------------------------------------\n\nYour original message:\n{$msg->message}\n\nFor further assistance, feel free to contact us:\nEmail: support@noblerides.co.ke\nPhone: +254 758 845 811\n\nBest regards,\nNoble Rides Support Team") }}"
                                           class="flex-1 bg-green-500 hover:bg-green-600 text-white px-3 py-1.5 rounded-md shadow text-center text-sm">
                                            Reply
                                        </a>
                                        <form method="POST" action="{{ route('admin.messages.destroy', $msg->id) }}" onsubmit="return confirm('Are you sure you want to delete this message?');" class="flex-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-full bg-red-100 hover:bg-red-200 text-red-600 px-3 py-1.5 rounded-md shadow text-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            
                            <!-- Desktop Columns (hidden on mobile) -->
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 text-gray-500 align-top">{{ $loop->iteration }}</td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 font-semibold align-top">{{ $msg->name }}</td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 align-top">
                                <a href="mailto:{{ $msg->email }}" class="text-blue-600 hover:underline">{{ $msg->email }}</a>
                            </td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 align-top">
                                @if ($msg->phone)
                                    <a href="tel:{{ $msg->phone }}" class="text-blue-600 hover:underline">{{ $msg->phone }}</a>
                                @else
                                    <span class="text-gray-400 italic">Not provided</span>
                                @endif
                            </td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 align-top">{{ $msg->subject ?? '—' }}</td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 align-top max-w-xs" title="{{ $msg->message }}">
                                <div class="line-clamp-2">{{ $msg->message }}</div>
                            </td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 text-sm text-gray-600 align-top">{{ $msg->created_at->format('d M Y, h:i A') }}</td>
                            <td class="hidden sm:table-cell px-4 sm:px-6 py-4 text-center align-top">
                                <div class="inline-flex gap-2">
                                    <a href="mailto:{{ $msg->email }}?subject={{ rawurlencode('Re: ' . $msg->subject) }}&body={{ rawurlencode("Dear {$msg->name},\n\nThank you for contacting Noble Rides.\n\nWe appreciate your message regarding: {$msg->subject}.\n\nHere is our response:\n\n--------------------------------------------------\n[Type your response here]\n--------------------------------------------------\n\nYour original message:\n{$msg->message}\n\nFor further assistance, feel free to contact us:\nEmail: support@noblerides.co.ke\nPhone: +254 758 845 811\n\nBest regards,\nNoble Rides Support Team") }}"
                                       class="bg-green-500 hover:bg-green-600 text-white px-3 py-2 rounded-md shadow text-sm">
                                        Reply
                                    </a>
                                    <form method="POST" action="{{ route('admin.messages.destroy', $msg->id) }}" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-100 hover:bg-red-200 text-red-600 px-3 py-2 rounded-md shadow text-sm">
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

   
</div>

</x-app-layout>

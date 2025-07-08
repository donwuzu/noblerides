<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noble Rides Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <style>
        .dropdown-menu.show {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
<div class="min-h-screen flex flex-col">
    <!-- Top Navigation -->
    <nav class="bg-blue-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <a href="{{ route('dashboard') }}" class="flex items-center font-bold text-xl text-white hover:text-blue-200">
                     
                    Admin
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden sm:flex items-center space-x-6">
                    @php $navLinks = [
                        'dashboard' => 'Dashboard',
                        'admin.bookings' => 'Bookings',
                        'admin.messages' => 'Messages',
                        'profile.edit' => 'Profile',
                    ]; @endphp

                    @foreach($navLinks as $route => $label)
                        <a href="{{ route($route) }}"
                           class="px-3 py-2 rounded-md text-sm font-medium transition duration-150 {{ request()->routeIs($route) ? 'text-blue-200 underline underline-offset-4' : 'text-white hover:text-blue-200' }}">
                            {{ $label }}
                        </a>
                    @endforeach

                    <!-- User Dropdown -->
                    <div class="relative">
                        <button id="user-menu-button" class="flex items-center text-white hover:text-blue-200 focus:outline-none">
                            <span class="mr-1">{{ Auth::user()->name }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div id="user-dropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50 dropdown-menu hidden">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-800">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-800">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Mobile Toggle -->
                <div class="sm:hidden">
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="sm:hidden hidden bg-blue-700 px-4 pt-2 pb-3 space-y-1" id="mobile-menu">
            @foreach($navLinks as $route => $label)
                <a href="{{ route($route) }}"
                   class="block rounded-md px-3 py-2 text-base font-medium {{ request()->routeIs($route) ? 'text-blue-200 underline underline-offset-4' : 'text-white hover:text-blue-200' }}">
                    {{ $label }}
                </a>
            @endforeach
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left text-white hover:text-blue-200 rounded-md px-3 py-2 text-base font-medium">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Page Header -->
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <h2 class="text-2xl font-semibold text-blue-800">{{ $header }}</h2>
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main class="flex-1 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-4 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm">
            &copy; {{ date('Y') }} Noble Rides. All rights reserved.
        </div>
    </footer>
</div>

<script>
    document.getElementById('user-menu-button').addEventListener('click', function (e) {
        e.stopPropagation();
        document.getElementById('user-dropdown').classList.toggle('show');
    });

    document.addEventListener('click', function () {
        const dropdown = document.getElementById('user-dropdown');
        if (dropdown.classList.contains('show')) {
            dropdown.classList.remove('show');
        }
    });

    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function () {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const currentUrl = window.location.href.split('?')[0];
        document.querySelectorAll('nav a').forEach(link => {
            if (link.href === currentUrl || currentUrl.startsWith(link.href)) {
                link.classList.add('text-blue-200', 'underline', 'underline-offset-4');
                link.classList.remove('text-white');
            }
        });
    });
</script>
</body>
</html>

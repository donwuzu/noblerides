<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Noble Rides') }}</title>

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

 <style>
    /* Improved layout structure */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Prevent double scrollbars */
    }
    
    /* Sidebar styling */
    .sidebar {
        transition: transform 0.3s ease, width 0.3s ease;
        will-change: transform, width;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 50;
        background-color: white;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
    }
    
    .sidebar-collapsed {
        width: 7rem;
    }
    
    .sidebar-expanded {
        width: 16rem;
    }
    
    /* Main content area */
    .main-content {
        height: 100vh;
        overflow-y: auto;
        transition: margin-left 0.3s ease;
    }
    
    /* Desktop styles */
    @media (min-width: 769px) {
        .sidebar-collapsed + .main-content {
            margin-left: 5rem;
        }
        
        .sidebar-expanded + .main-content {
            margin-left: 16rem;
        }
    }
    
    /* Mobile styles */
    @media (max-width: 768px) {
        .main-content {
            margin-left: 0 !important;
        }
        
        .sidebar {
            width: 16rem;
            transform: translateX(-100%);
        }
        
        .sidebar-mobile-expanded {
            transform: translateX(0);
        }
    }
    
    
    /* Rest of your existing styles remain unchanged */
    .sidebar-header {
        padding: 1rem;
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: space-between;
        min-height: 60px;
    }
    
    .sidebar-nav {
        flex: 1;
        padding: 0.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .sidebar-footer {
        padding: 1rem;
        border-top: 1px solid #e5e7eb;
    }
    
    .sidebar-item {
        display: flex;
        align-items: center;
        padding: 0.75rem;
        margin-bottom: 0.25rem;
        border-radius: 0.375rem;
        transition: all 0.2s ease;
        position: relative;
    }
    
    .sidebar-item i {
        flex-shrink: 0;
        width: 1.5rem;
        text-align: center;
    }
    
    .sidebar-text {
        margin-left: 0.75rem;
        transition: opacity 0.2s ease, margin-left 0.2s ease;
        white-space: nowrap;
        overflow: hidden;
    }
    
    .sidebar-collapsed .sidebar-text {
        opacity: 0;
        width: 0;
        margin-left: 0;
    }
    
    .sidebar-expanded .sidebar-text,
    .sidebar-mobile-expanded .sidebar-text {
        opacity: 1;
        width: auto;
        margin-left: 0.75rem;
    }
    
    .sidebar-tooltip {
        visibility: hidden;
        position: absolute;
        left: 100%;
        top: 50%;
        transform: translateY(-50%);
        background-color: #333;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.375rem;
        white-space: nowrap;
        z-index: 10;
        opacity: 0;
        transition: opacity 0.2s ease;
        pointer-events: none;
        font-size: 0.875rem;
        margin-left: 0.5rem;
    }
    
    .sidebar-collapsed .sidebar-item:hover .sidebar-tooltip {
        visibility: visible;
        opacity: 1;
    }
    
    .mobile-menu-button {
        display: none;
        padding: 1rem;
        background-color: white;
        border: none;
        cursor: pointer;
    }
    
    .whatsapp-button {
        position: fixed;
        bottom: 1.5rem;
        right: 1.5rem;
        z-index: 30;
        transition: all 0.3s ease;
    }
    
    .whatsapp-button-content {
        display: flex;
        align-items: center;
        background-color: #25D366;
        color: white;
        padding: 0.75rem 1rem;
        border-radius: 9999px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .whatsapp-button-content:hover {
        background-color: #128C7E;
        transform: translateY(-2px);
    }
    
    .whatsapp-button i {
        font-size: 1.25rem;
    }
    
    .whatsapp-button .text {
        margin-left: 0.5rem;
        max-width: 0;
        overflow: hidden;
        white-space: nowrap;
        transition: max-width 0.3s ease, opacity 0.3s ease;
        opacity: 0;
    }
    
    .whatsapp-button:hover .text {
        max-width: 200px;
        opacity: 1;
    }
    
   .sidebar-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* Use a more transparent background to make the blur effect more prominent */
    background: rgba(255, 255, 255, 0.1);
    z-index: 40;
    opacity: 0;
    pointer-events: none;
    
    /* Apply the blur effect */
    -webkit-backdrop-filter: blur(4px); /* For Safari */
    backdrop-filter: blur(4px);

    /* Transition opacity and the backdrop-filter for a smooth blur-in effect */
    transition: opacity 0.3s ease, backdrop-filter 0.3s ease;
}

.sidebar-overlay-active {
    opacity: 1;
    pointer-events: all;
}
    
    .flex-shrink-0 {
        flex-shrink: 0;
    }





    
</style>



</head>
<body class="bg-gray-100 font-sans antialiased flex h-full">
    <!-- Mobile Overlay -->
    <div id="sidebarOverlay" class="sidebar-overlay" onclick="toggleSidebar()"></div>
    

<!-- Sidebar -->
<div id="sidebar" class="sidebar bg-white shadow-md sidebar-collapsed md:sidebar-expanded flex flex-col w-20">
   <div class="flex h-16 items-center justify-between p-4 border-b border-gray-200 flex-shrink-0">

    <a href="/" class="flex items-center pr-3 transform transition-transform duration-300 ease-in-out hover:scale-105">
        <div class="inline-flex items-center justify-center h-10 w-10 bg-blue-100 text-blue-600 rounded-full">
            <i class="fas fa-car-side text-xl"></i>
        </div>
        <span class="sidebar-text ml-3 font-semibold text-lg text-gray-800">Noble Rides</span>
    </a>

    <button onclick="toggleSidebar()" class="p-1 h-11 w-11 rounded-full text-gray-500 hover:bg-gray-100 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-colors duration-200">
        <i class="fas fa-bars text-xl"></i>
    </button>

</div>
    
    <!-- Navigation Links - Removed overflow-y-auto -->
    <nav class="flex-1 px-2 py-4 space-y-1">
        <a href="{{ route('home') }}" class="sidebar-item flex items-center p-3 rounded-lg {{ request()->routeIs('home') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-200' }}">
            <i class="fas fa-home text-lg w-6 text-center"></i>
            <span class="sidebar-text ml-3">Home</span>
            <span class="sidebar-tooltip">Home</span>
        </a>
        
        <a href="{{ route('services') }}" class="sidebar-item flex items-center p-3 rounded-lg {{ request()->routeIs('services') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-200' }}">
            <i class="fas fa-handshake text-lg w-6 text-center"></i>
            <span class="sidebar-text ml-3">Services</span>
            <span class="sidebar-tooltip">Services</span>
        </a>
        
        <a href="{{ route('booking.create') }}" class="sidebar-item flex items-center p-3 rounded-lg {{ request()->routeIs('booking.create') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-200' }}">
            <i class="fas fa-calendar-check text-lg w-6 text-center"></i>
            <span class="sidebar-text ml-3">Book Now</span>
            <span class="sidebar-tooltip">Book Now</span>
        </a>
        
        <a href="{{ route('about') }}" class="sidebar-item flex items-center p-3 rounded-lg {{ request()->routeIs('about') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-200' }}">
            <i class="fas fa-info-circle text-lg w-6 text-center"></i>
            <span class="sidebar-text ml-3">About Us</span>
            <span class="sidebar-tooltip">About Us</span>
        </a>
        
        <a href="{{ route('contact.show') }}" class="sidebar-item flex items-center p-3 rounded-lg {{ request()->routeIs('contact.show') ? 'bg-blue-100 text-blue-700 font-semibold' : 'text-gray-700 hover:bg-gray-200' }}">
            <i class="fas fa-envelope text-lg w-6 text-center"></i>
            <span class="sidebar-text ml-3">Contact</span>
            <span class="sidebar-tooltip">Contact</span>
        </a>
    </nav>
    
    <!-- Sidebar Footer -->
    <div class="p-4 border-t flex-shrink-0">
        <div class="sidebar-item flex items-center p-3 rounded-lg text-gray-700 hover:bg-gray-200">
            <i class="fas fa-cog text-lg w-6 text-center"></i>
            <span class="sidebar-text ml-3">Settings</span>
            <span class="sidebar-tooltip">Settings</span>
        </div>
    </div>
</div>

   <!-- Main Content Area -->
<div class="main-content flex-1 overflow-y-auto">
    <button 
        onclick="toggleSidebar()" 
        class="lg:hidden p-3 rounded-lg text-gray-500
               hover:bg-gray-100 hover:text-gray-800
               active:bg-gray-200
               focus:outline-none focus:ring-2 focus:ring-blue-500
               transition-colors duration-200 ease-in-out">
        <i class="fas fa-bars text-xl"></i>
    </button>
    
    <!-- Content Wrapper with optimized spacing and responsive behavior -->
<div class="content-wrapper 
    p-4 md:p-6 
    pr-6 md:pr-8 lg:pr-12 
    w-full 
    max-w-screen-2xl 
    mx-auto
    transition-all duration-300 ease-in-out
    lg:ml-[5rem] lg:sidebar-expanded:ml-[16rem]
    min-h-[calc(100vh-3.5rem)]">
    
    <!-- Inner container for better content alignment -->
    <div class="w-full h-full
        bg-white
        rounded-lg
        shadow-sm
        border border-gray-100
        p-4 md:p-6
        overflow-x-hidden">
        @yield('content')
    </div>
</div>


 <footer class="bg-blue-700 text-white py-4 mt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm">
            &copy; {{ date('Y') }} Noble Rides. All rights reserved.
        </div>
    </footer>


</div>

<!-- WhatsApp Button -->
<a href="https://wa.me/254758845811" class="fixed bottom-6 right-6 z-30 whatsapp-button" aria-label="Chat on WhatsApp" target="_blank">
    <div class="relative flex items-center">
        <!-- Glow Effect -->
        <div class="absolute -inset-1 bg-green-500 rounded-full blur opacity-70 animate-ping"></div>
        
        <!-- Button Content -->
        <div class="relative flex items-center bg-green-600 hover:bg-green-700 text-white px-4 py-3 rounded-full shadow-lg transition-colors">
            <i class="fab fa-whatsapp text-xl"></i>
            <span class="text ml-2 mr-1 text-sm font-medium whitespace-nowrap">Chat with us</span>
        </div>
    </div>
</a>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        
        if (window.innerWidth <= 768) {
            sidebar.classList.toggle('sidebar-mobile-expanded');
            overlay.classList.toggle('sidebar-overlay-active');
            
            if (sidebar.classList.contains('sidebar-mobile-expanded')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        } else {
            sidebar.classList.toggle('sidebar-collapsed');
            sidebar.classList.toggle('sidebar-expanded');
        }
        
        // Save state
        const isExpanded = sidebar.classList.contains('sidebar-expanded') || 
                          sidebar.classList.contains('sidebar-mobile-expanded');
        localStorage.setItem('sidebarExpanded', isExpanded);
    }
    
    // Initialize sidebar
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('sidebar');
        const savedState = localStorage.getItem('sidebarExpanded');
        
        if (window.innerWidth > 768) {
            if (savedState === 'false') {
                sidebar.classList.add('sidebar-collapsed');
                sidebar.classList.remove('sidebar-expanded');
            } else {
                sidebar.classList.add('sidebar-expanded');
                sidebar.classList.remove('sidebar-collapsed');
            }
        } else {
            sidebar.classList.add('sidebar-collapsed');
            sidebar.classList.remove('sidebar-expanded', 'sidebar-mobile-expanded');
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        
        if (window.innerWidth > 768) {
            overlay.classList.remove('sidebar-overlay-active');
            sidebar.classList.remove('sidebar-mobile-expanded');
            document.body.style.overflow = '';
            
            const savedState = localStorage.getItem('sidebarExpanded');
            if (savedState === 'false') {
                sidebar.classList.add('sidebar-collapsed');
                sidebar.classList.remove('sidebar-expanded');
            } else {
                sidebar.classList.add('sidebar-expanded');
                sidebar.classList.remove('sidebar-collapsed');
            }
        } else {
            sidebar.classList.add('sidebar-collapsed');
            sidebar.classList.remove('sidebar-expanded');
        }
    });
</script>





</body>


</html>
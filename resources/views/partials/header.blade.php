<!-- resources/views/partials/header.blade.php -->
<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <!-- Logo or brand name -->
                <div class="flex-shrink-0 text-white">
                    Outfit store
                </div>
                <!-- Navigation links -->
                <div class="hidden md:block ml-4">
                    <div class="flex items-baseline space-x-4">
                        <a href="{{ url('/') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="{{ route('about') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact Us</a>
                        <!-- Add more links as needed -->
                    </div>
                </div>
            </div>
            <!-- Card section -->
            <div class="hidden md:block">
                <!-- Card content -->
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Card icon and action button -->
                    <div class="bg-white p-2 rounded-full flex items-center">
                        <!-- Card icon -->
                        <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v2H3zM21 7H7m14 4H7m14 4H7m14 4H7m5 0h2m-2 0V5a2 2 0 00-2-2H5a2 2 0 00-2 2v18a2 2 0 002 2h14a2 2 0 002-2v-2"/>
                        </svg>
                        <!-- Card action button -->
                        <button class="ml-2 focus:outline-none">
                            <span class="sr-only">View shopping cart</span>
                            <!-- Heroicon name: solid/shopping-cart -->
                            <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4l2 12h12l2-12H4zm5.5 13a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM18 18H6"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/menu -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
        <!-- Mobile menu items -->
    </div>
</nav>

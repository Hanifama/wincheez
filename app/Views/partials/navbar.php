<header class="relative">
    <nav class="navbar-first top-0 fixed w-full z-20">
        <div class="p-6 px-8 sm:px-6 lg:px-8 w-full">
            <div class="flex items-center justify-between h-16 max-w-7xl mx-auto">
                <!-- Left Menu -->
                <ul class="hidden md:flex space-x-16 text-blue-800 font-semibold">
                    <li><a href="/produk" class="hover:text-blue-500">PRODUK</a></li>
                    <li><a href="/momen-spesial" class="hover:text-blue-500">MOMEN SPESIAL</a></li>
                    <li><a href="/artikel" class="hover:text-blue-500">ARTIKEL</a></li>
                </ul>

                <!-- Logo -->
                <a href="/" class="flex-shrink-0">
                    <img src="assets/images/wincheez.png" alt="WINCheez Logo" class="h-20">
                </a>

                <!-- Right Menu -->
                <ul class="hidden md:flex space-x-16 text-blue-800 font-semibold">
                    <li><a href="/kreasi-wincheez" class="hover:text-blue-500">KREASI WINCheez</a></li>
                    <li><a href="/about" class="hover:text-blue-500">TENTANG KAMI</a></li>
                    <li>
                        <a href="/shop" class="bg-blue-700 text-white px-4 py-2 rounded-full border-2 border-yellow-400">Shop Now</a>
                    </li>
                </ul>

                <!-- Mobile Menu Button -->
                <button id="menu-button" class="md:hidden text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            <!-- Mobile Dropdown Menu -->
            <div id="dropdown-menu" class="hidden bg-white w-full absolute top-16 left-0 z-30 shadow-lg md:hidden transition-transform transform -translate-y-full">
                <div class="p-4 flex justify-between items-center border-b">
                    <span class="text-lg font-semibold">Menu</span>
                    <button id="close-menu" class="text-gray-600 text-2xl">&times;</button>
                </div>
                <a href="/produk" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">PRODUK</a>
                <a href="/momen-spesial" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">MOMEN SPESIAL</a>
                <a href="/resep" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">RESEP</a>
                <a href="/artikel" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">ARTIKEL</a>
                <a href="/kreasi-wincheez" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">KREASI WINCheez</a>
                <a href="/about" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">TENTANG KAMI</a>
            </div>
        </div>
    </nav>

    <!-- Navbar kedua (Hanya untuk Desktop) -->
    <nav class="navbar-second bg-white px-6 py-6 flex items-center w-full fixed z-20 hidden shadow-md md:flex">
        <div class="flex flex-1 justify-evenly max-w-7xl mx-auto">
            <a href="/produk" class="text-blue-700 font-medium">PRODUK</a>
            <a href="/momen-spesial" class="text-blue-700 font-medium">MOMEN SPESIAL</a>
            <a href="/resep" class="text-blue-700 font-medium">RESEP</a>
            <a href="/artikel" class="text-blue-700 font-medium">ARTIKEL</a>
            <a href="/kreasi-wincheez" class="text-blue-700 font-medium">KREASI WINCheez</a>
            <a href="/about" class="text-blue-700 font-medium">TENTANG KAMI</a>
        </div>
        <a href="#" class="ml-6 px-4 py-2 bg-blue-700 text-white rounded-full border-2 border-yellow-400 text-sm font-bold">SHOP NOW</a>
    </nav>

</header>
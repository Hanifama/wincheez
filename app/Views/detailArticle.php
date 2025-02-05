<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Article | Wincheez Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header>
        <nav class="navbar-first top-0 fixed w-full z-20">
            <div class="p-6 px-8 sm:px-6 lg:px-8 w-full">
                <div class="flex items-center justify-between h-16 max-w-7xl mx-auto">
                    <!-- Left Menu -->
                    <ul class="hidden md:flex space-x-16 text-blue-800 font-semibold">
                        <li><a href="#" class="hover:text-blue-500">PRODUK</a></li>
                        <li><a href="#" class="hover:text-blue-500">MOMEN SPESIAL</a></li>
                        <li><a href="#" class="hover:text-blue-500">ARTIKEL</a></li>
                    </ul>

                    <!-- Logo -->
                    <a href="#" class="flex-shrink-0">
                        <img src="/assets/images/wincheez.png" alt="WINCheez Logo" class="h-20">
                    </a>

                    <!-- Right Menu -->
                    <ul class="hidden md:flex space-x-16 text-blue-800 font-semibold">
                        <li><a href="#" class="hover:text-blue-500">KREASI WINCheez</a></li>
                        <li><a href="#" class="hover:text-blue-500">TENTANG KAMI</a></li>
                        <li>
                            <a class="bg-blue-700 text-white px-4 py-2 rounded-full border-2 border-yellow-400">Shop Now</a>
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
                    <a href="#produk" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">PRODUK</a>
                    <a href="#momen-spesial" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">MOMEN SPESIAL</a>
                    <a href="#resep" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">RESEP</a>
                    <a href="#artikel" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">ARTIKEL</a>
                    <a href="#kreasi" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">KREASI WINCheez</a>
                    <a href="#tentang-kami" class="block px-6 py-3 text-gray-700 hover:bg-gray-200">TENTANG KAMI</a>
                </div>
            </div>
        </nav>

        <!-- Navbar kedua (Hanya untuk Desktop) -->
        <nav class="navbar-second bg-white px-6 py-6 flex items-center w-full fixed z-20 hidden shadow-md md:flex">
            <div class="flex flex-1 justify-evenly max-w-7xl mx-auto">
                <a href="#" class="text-blue-700 font-medium">PRODUK</a>
                <a href="#" class="text-blue-700 font-medium">MOMEN SPESIAL</a>
                <a href="#" class="text-blue-700 font-medium">RESEP</a>
                <a href="#" class="text-blue-700 font-medium">ARTIKEL</a>
                <a href="#" class="text-blue-700 font-medium">KREASI WINCheez</a>
                <a href="#" class="text-blue-700 font-medium">TENTANG KAMI</a>
            </div>
            <a href="#" class="ml-6 px-4 py-2 bg-blue-700 text-white rounded-full border-2 border-yellow-400 text-sm font-bold">SHOP NOW</a>
        </nav>
    </header>

    <section class="max-w-4xl mx-auto pt-32">

        <!-- Breadcrumb -->
        <div class="text-gray-600 mb-4">
            <span>Artikel</span> / <span class="font-bold text-blue-500">Artikel Populer</span> / <span class="font-semibold text-blue-500">Back to School, saatnya cek kesiapan si kecil kembali ke sekolah</span>
        </div>

        <!-- Heading 1: Artikel Populer -->
        <h1 class="text-xl font-semibold mb-4 text-gray-800">ARTIKEL POPULER</h1>

        <!-- Heading 2: Back to School -->
        <h2 class="text-3xl font-bold mb-6 text-gray-900 leading-tight">Back to School, saatnya cek kesiapan si kecil kembali ke sekolah!</h2>

        <!-- Description -->
        <p class="text-lg text-gray-700 mb-6">
            Liburan udah selesai aja nih, Moms. Saatnya kembali ke realita siapin bekal Si Kecil dan segala perlengkapan sekolahnya.
            Biar nggak bingung apa aja yang perlu diperhatikan sebelum Si Kecil kembali sekolah, swipe sampai akhir ya Moms.
        </p>

        <!-- Author & Date -->
        <div class="flex items-center space-x-4 text-sm text-gray-500 mb-6">
            <img src="author-image.jpg" alt="By Wincheez" class="w-8 h-8 rounded-full">
            <span>By Wincheez</span>
            <span>|</span>
            <span>Uploaded 1 Februari 2025</span>
        </div>

        <!-- Banner Image -->
        <img src="/assets/images/banner-ig.jpeg" alt="Banner" class="w-full rounded-lg mb-6">

        <!-- Main Content -->
        <p class="text-lg text-gray-700 mb-6">
            Libur panjang adalah momen yang ditunggu-tunggu oleh anak-anak. Mereka bisa bermain, bersantai, dan menikmati waktu bersama keluarga.
            Namun, setelah liburan usai, kembali ke rutinitas sekolah bisa menjadi tantangan tersendiri. Berikut adalah beberapa tips untuk membantu anak-anak bersiap kembali ke sekolah dengan lancar:
        </p>

        <!-- Tips -->
        <div class="space-y-8 mb-8">
            <div class="items-center space-x-4">
                <h3 class="font-semibold text-2xl text-gray-800">1. Atur kembali jam tidur si kecil</h3>
            </div>
            <div class="w-full max-w-3xl h-auto overflow-hidden rounded-lg shadow-lg">
                <div class="flex justify-center">
                    <img src="/assets/images/banner-ig.jpeg" alt="Banner" class="object-cover">
                </div>
            </div>

            <p class="text-lg text-gray-700">
                Selama liburan, anak-anak cenderung tidur lebih larut dan bangun lebih siang. Sebelum kembali ke sekolah, pastikan untuk mengatur kembali jadwal tidur mereka secara bertahap. Mulailah beberapa hari sebelum hari pertama sekolah, dengan memajukan waktu tidur dan waktu bangun mereka sedikit demi sedikit.
            </p>
        </div>


        <!-- Tips -->
        <div class="space-y-8 mb-8">
            <div class="items-center space-x-4">
                <h3 class="font-semibold text-2xl text-gray-800">1. Atur kembali jam tidur si kecil</h3>
            </div>

            <!-- Pembungkus gambar -->
            <div class="w-full max-w-3xl h-auto overflow-hidden rounded-lg shadow-lg">
                <div class="flex justify-center items-center">
                    <img src="/assets/images/banner-ig.jpeg" alt="Banner" class="object-cover">
                </div>
            </div>

            <p class="text-lg text-gray-700">
                Selama liburan, anak-anak cenderung tidur lebih larut dan bangun lebih siang. Sebelum kembali ke sekolah, pastikan untuk mengatur kembali jadwal tidur mereka secara bertahap. Mulailah beberapa hari sebelum hari pertama sekolah, dengan memajukan waktu tidur dan waktu bangun mereka sedikit demi sedikit.
            </p>
        </div>

        <!-- Tips -->
        <div class="space-y-8 mb-8">
            <div class="items-center space-x-4">
                <h3 class="font-semibold text-2xl text-gray-800">1. Atur kembali jam tidur si kecil</h3>
            </div>

            <!-- Pembungkus gambar -->
            <div class="w-full max-w-3xl h-auto overflow-hidden rounded-lg shadow-lg">
                <div class="flex justify-center items-center">
                    <img src="/assets/images/banner-ig.jpeg" alt="Banner" class="object-cover">
                </div>
            </div>

            <p class="text-lg text-gray-700">
                Selama liburan, anak-anak cenderung tidur lebih larut dan bangun lebih siang. Sebelum kembali ke sekolah, pastikan untuk mengatur kembali jadwal tidur mereka secara bertahap. Mulailah beberapa hari sebelum hari pertama sekolah, dengan memajukan waktu tidur dan waktu bangun mereka sedikit demi sedikit.
            </p>
        </div>


        <!-- Final Banner -->
        <img src="/assets/images/banner-ig.jpeg" alt="Final Banner" class="w-full rounded-lg mb-6">

        <!-- Share Button -->
        <div class="text-center mb-8">
            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600">
                Apakah menurut anda artikel ini bermanfaat? Jika iya, bagikan artikel ini
            </button>
        </div>

        <!-- Horizontal Rule -->
        <hr class="border-gray-300 mb-8">
    </section>

    <section class="max-w-7xl mx-auto px-20 py-10">
        <!-- Judul -->
        <h1 class="text-xl font-bold text-blue-800 mb-8">Artikel Lainnya</h1>

        <!-- Wrapper Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="p-6 rounded-lg flex flex-col">
                <img src="/assets/images/banner-ig.jpeg" alt="Artikel 1" class="w-full h-48 object-cover rounded-lg">
                <p class="text-gray-500 text-sm text-right mt-1">12 Februari 2025</p>
                <h3 class="text-xl font-semibold text-blue-700 mt-2">Judul Artikel 1</h3>
                <p class="text-gray-600 text-sm mt-2">Deskripsi singkat artikel 1 yang memberikan informasi menarik kepada pembaca.</p>
            </div>

            <!-- Card 2 -->
            <div class="p-6 rounded-lg flex flex-col">
                <img src="/assets/images/banner-ig.jpeg" alt="Artikel 2" class="w-full h-48 object-cover rounded-lg">
                <p class="text-gray-500 text-sm text-right mt-1">15 Februari 2025</p>
                <h3 class="text-xl font-semibold text-blue-700 mt-2">Judul Artikel 2</h3>
                <p class="text-gray-600 text-sm mt-2">Deskripsi singkat artikel 2 yang memberikan informasi menarik kepada pembaca.</p>
            </div>

            <!-- Card 3 -->
            <div class="p-6 rounded-lg flex flex-col">
                <img src="/assets/images/banner-ig.jpeg" alt="Artikel 3" class="w-full h-48 object-cover rounded-lg">
                <p class="text-gray-500 text-sm text-right mt-1">20 Februari 2025</p>
                <h3 class="text-xl font-semibold text-blue-700 mt-2">Judul Artikel 3</h3>
                <p class="text-gray-600 text-sm mt-2">Deskripsi singkat artikel 3 yang memberikan informasi menarik kepada pembaca.</p>
            </div>
        </div>
    </section>

    <footer class="bg-white text-blue-300 py-8 rounded-t-3xl relative overflow-hidden">
        <div class="container mx-auto">
            <div class="flex flex-wrap gap-4">
                <!-- Bagian 1: Logo -->
                <div class="h-40 sm:w-[260px]">
                    <img src="/assets/images/wincheez.png" alt="Logo" class="h-full w-full m-0 object-cover">
                </div>

                <!-- Bagian 2: FAQ & Contact, Syarat & Ketentuan -->
                <div class="sm:w-1/6 p-4">
                    <ul>
                        <li><a href="#" class="text-sm hover:underline">ABOUT US</a></li>
                        <li><a href="#" class="text-sm hover:underline">FAQ</a></li>
                        <li><a href="#" class="text-sm hover:underline">CONTACT</a></li>
                        <li><a href="#" class="text-sm hover:underline">SYARAT & KETENTUAN</a></li>
                        <li><a href="#" class="text-sm hover:underline">KEBIJAKAN PRIVASI</a></li>
                    </ul>
                </div>

                <!-- Bagian 3: Nomor & Alamat Email -->
                <div class="sm:w-1/4 p-4">
                    <p class="text-sm">+62 812 345 678</p>
                    <p class="text-sm"><a href="mailto:support@wicheez.com" class="text-blue-400 hover:underline">customer.care@wicheez.com</a></p>
                    <p class="text-sm">Jalan Mekar Raya No.kav.15C, Mekar Mulya, Kec. Panyileukan, Kota Bandung, Jawa Barat 40292</p>
                </div>

                <!-- Bagian 4: Promo & Hadiah -->
                <div class="w-full sm:w-[420px] p-4">
                    <h4 class="text-sm font-semibold">Ingin dapat informasi seputar promo & hadiah dari WINCheez?</h4>
                    <p class="text-sm mb-4">Daftar & segera dapatkan kesempatannya!</p>
                    <input type="email" placeholder="Masukkan email Anda." class="p-2 text-sm mb-4 rounded-lg bg-gray-900 text-white">
                    <div class="flex justify-start space-x-6 mt-3 z-10 relative">
                        <div class="w-10 h-10 bg-blue-200 rounded-full"></div>
                        <div class="w-10 h-10 bg-blue-200 rounded-full"></div>
                        <div class="w-10 h-10 bg-blue-200 rounded-full"></div>
                        <div class="w-10 h-10 bg-blue-200 rounded-full"></div>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-[10px] text-gray-500">
                <p>© 2025 <span class="font-semibold">PT Bangun Rasaguna Lestari</span>. <span class="font-bold">WINCheez®</span> dan semua yang berhubungan dengan merk dan logo telah dilindungi oleh hak cipta.</p>
            </div>

            <div id="random-product" class="absolute bottom-3 left-0 w-full flex justify-evenly z-20">
                <img src="/assets/images/produk-1.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-2.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-3.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-4.png" class="product-image w-16 h-16 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-1.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-2.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-3.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-4.png" class="product-image w-16 h-16 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-5.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-6.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-7.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-1.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-2.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-3.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-4.png" class="product-image w-16 h-16 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-1.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-2.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-3.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-4.png" class="product-image w-16 h-16 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-5.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-6.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-7.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-1.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-2.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-3.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-4.png" class="product-image w-16 h-16 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-1.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-2.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-3.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-4.png" class="product-image w-16 h-16 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-5.png" class="product-image w-8 h-8 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-6.png" class="product-image w-12 h-12 object-cover rounded-lg opacity-0 transform" />
                <img src="/assets/images/produk-7.png" class="product-image w-10 h-10 object-cover rounded-lg opacity-0 transform" />
            </div>

        </div>
    </footer>
</body>

<!-- Navbar -->
<script>
    const menuButton = document.getElementById('menu-button');
    const mobileMenu = document.getElementById('dropdown-menu');
    const closeMenu = document.getElementById('close-menu');
    const navbarFirst = document.querySelector('.navbar-first');
    const navbarSecond = document.querySelector('.navbar-second');
    const scrollThreshold = 100;

    // Toggle mobile menu
    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        setTimeout(() => {
            mobileMenu.classList.toggle('-translate-y-full');
        }, 10);
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-y-full');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    });

    // Handle navbar swap on scroll (Desktop Only)
    function handleScroll() {
        if (window.innerWidth >= 768) {
            if (window.scrollY > scrollThreshold) {
                navbarFirst.style.display = 'none';
                navbarSecond.style.display = 'flex';
            } else {
                navbarFirst.style.display = 'flex';
                navbarSecond.style.display = 'none';
            }
        } else {
            navbarFirst.style.display = 'flex';
            navbarSecond.style.display = 'none';
        }
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('resize', handleScroll);
    handleScroll();
</script>

<!-- Footer -->
<script>
    window.onload = function() {
        const images = document.querySelectorAll(".product-image");
        let isAtBottom = false;
        let animationTriggered = false;

        // Fungsi untuk memeriksa apakah sudah mencapai bagian bawah halaman
        function checkIfAtBottom() {
            const scrollPosition = window.innerHeight + window.scrollY;
            const documentHeight = document.documentElement.scrollHeight;

            // Tambahkan buffer 10px sebelum bagian bawah untuk memastikan animasi dipicu
            isAtBottom = scrollPosition >= documentHeight - 10;

            // Jika scroll sudah mencapai bagian bawah dan animasi belum dipicu, jalankan animasi
            if (isAtBottom && !animationTriggered) {
                animationTriggered = true; // Tandai animasi sudah dipicu
                throwAndDropProducts();
            }
        }

        // Fungsi untuk mereset flag animasi ketika scroll ke atas (opsional)
        function resetAnimationFlag() {
            if (window.scrollY < document.documentElement.scrollHeight - window.innerHeight - 10) {
                animationTriggered = false; // Reset flag jika scroll kembali ke atas
            }
        }

        // Panggil pada scroll event
        window.addEventListener("scroll", () => {
            checkIfAtBottom();
            resetAnimationFlag(); // Reset flag jika scroll ke atas
        });

        // Panggil pada resize untuk mengupdate perhitungan saat ukuran layar berubah
        window.addEventListener("resize", () => {
            checkIfAtBottom();
        });

        function throwAndDropProducts() {
            images.forEach((image) => {
                const randomX = (Math.random() - 0.5) * 200;
                const randomY = (Math.random() * -200) - 150;
                const randomRotate = (Math.random() - 0.5) * 90;

                image.style.transition = `all 0.8s ease-out`;
                image.style.opacity = 1;
                image.style.transform = `translate(${randomX}px, ${randomY}px) rotate(${randomRotate}deg)`;

                setTimeout(() => {
                    const rotateUp = 90;
                    const finalX = (Math.random() - 0.5) * 300;
                    const finalY = (Math.random() * 200) + 150;
                    const finalRotate = (Math.random() - 0.5) * 65;

                    image.style.transition = `transform 2.5s cubic-bezier(0.25, 0.8, 0.25, 1), opacity 2.5s ease-out`;
                    image.style.transform = `translate(${finalX}px, ${finalY}px) rotate(${rotateUp}deg)`;

                    setTimeout(() => {
                        image.style.transition = `transform 1.5s ease-in-out, opacity 1.5s ease-out`;
                        image.style.transform = `translate(${finalX}px, ${finalY}px) rotate(${finalRotate}deg)`;
                        image.style.opacity = 0.8;
                    }, 5000);
                }, 800);
            });
        }

        // Pastikan untuk memeriksa posisi saat halaman pertama kali dimuat
        checkIfAtBottom();
    };
</script>

</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk | Wincheez Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <header class="relative w-full bg-white p-4 flex z-10 fixed top-0 left-0 right-0">
        <nav class="flex items-center justify-between w-full">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="logo.png" alt="Logo" class="h-8 mr-4">
            </div>

            <!-- Category -->
            <div class="relative">
                <button
                    class="text-gray-600 hover:text-blue-500 focus:outline-none">
                    Kategori
                </button>
            </div>

            <!-- Search Input & Icon -->
            <div class="relative flex items-center w-1/2">
                <input type="text" placeholder="Cari produk..." class="w-full p-2 pl-10 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 18a7 7 0 100-14 7 7 0 000 14zm0 0l3 3m-3-3l-3-3" />
                </svg>
            </div>

            <!-- Login -->
            <div>
                <a href="#" class="text-gray-600 hover:text-blue-500">Masuk</a>
            </div>

            <!-- Cart Icon -->
            <div class="relative">
                <button class="text-gray-600 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18c1 0 1 1 1 2v12c0 1-1 2-2 2H4c-1 0-2-1-2-2V5c0-1 1-2 2-2z" />
                    </svg>
                </button>
                <span class="absolute top-0 right-0 bg-red-500 text-white rounded-full text-xs w-5 h-5 flex items-center justify-center">3</span>
            </div>
        </nav>
    </header>
    
    <section class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Kiri: Gambar Produk -->
        <div>
            <!-- Gambar Besar -->
            <img src="<?= esc($product['image']) ?>" alt="Produk" class="w-full h-[400px] object-cover rounded-lg shadow-md">

            <!-- Thumbnail -->
            <div class="flex gap-4 mt-4">
                <?php foreach ($product['thumbnails'] as $image) : ?>
                    <div class="w-full sm:w-2/5 h-32">
                        <img src="<?= esc($image) ?>" alt="Thumbnail" class="w-full h-full object-cover rounded-md cursor-pointer border-2 hover:border-blue-500">
                    </div>
                <?php endforeach; ?>
            </div>


            <!-- Tombol Ide Kreasi -->
            <div class="mt-6 text-center">
                <button class="bg-blue-700 text-white px-6 py-3 rounded-full hover:bg-blue-800 w-full text-lg font-semibold">
                    💡 IDE KREASI WINCHEEZ MOZZARELLA
                </button>
            </div>
        </div>

        <!-- Kanan: Detail Produk -->
        <div>
            <!-- Hastag -->
            <div class="py-1 px-3 rounded-full bg-blue-100 w-max max-w-xs">
                <h1>Mozzain Aja!</h1>
            </div>


            <h1 class="text-2xl font-bold text-gray-800"><?= esc($product['name']) ?></h1>
            <p class="text-xl font-semibold text-green-600 mt-2"><?= esc($product['price']) ?></p>

            <!-- Variasi Produk -->
            <div class="mt-4">
                <label class="block text-gray-700 font-medium">Variasi</label>
                <select class="w-full p-3 border border-gray-300 rounded-md">
                    <option>Pilih variasi produk</option>
                    <?php foreach ($product['variations'] as $variation) : ?>
                        <option><?= esc($variation) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Kuantitas -->
            <div class="mt-4 w-full relative">
                <label class="text-gray-700 font-medium">Kuantitas</label>
                <div class="relative w-full">
                    <input type="text" value="1" class="h-12 text-center border border-gray-300 rounded-md w-full">
                    <button class="w-8 h-8 flex items-center justify-center bg-gray-200 hover:bg-gray-300 rounded-full absolute left-10 top-1/2 -translate-y-1/2 -ml-5 z-10 shadow-md">−</button>
                    <button class="w-8 h-8 flex items-center justify-center bg-gray-200 hover:bg-gray-300 rounded-full absolute right-10 top-1/2 -translate-y-1/2 -mr-5 z-10 shadow-md">+</button>
                </div>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-6 flex gap-4">
                <button class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 w-full">Beli Sekarang</button>
                <button class="bg-red-500 text-white px-6 py-3 rounded-full hover:bg-red-600 w-full">Masukkan Keranjang</button>
            </div>

            <!-- Detail Produk -->
            <div class="mt-4 p-4">
                <h2 class="text-lg font-semibold text-gray-800">Detail Produk</h2>
                <p class="text-gray-600 mt-2 space-y-1">✅ Extra Stretch</p>
                <p class="text-gray-600 mt-2 space-y-1">✅ Terbuat dari susu New Zealand</p>
                <p class="text-gray-600 mt-2 space-y-1">✅ Aman disimpan di suhu ruang</p>
                <p class="text-gray-600 mt-2 space-y-1">Keju Mozarella Olahan</p>
                <p class="text-gray-600 mt-2 space-y-1">Shelf Life : 6 Bulan</p>
                <p class="text-gray-600 mt-2 space-y-1"><strong>Nomor MD:</strong> 27281100020836</p>
                <p class="text-gray-600 mt-2 space-y-1"><strong>No Sertifikat Halal:</strong> ID32210000277620422</p>
                <p class="text-gray-600 mt-2 space-y-1"><strong>Penyimpanan:</strong> Simpan dalam keadaan kering</p>
                <p class="text-gray-600 mt-2 space-y-1"><strong>Saran Penyajian:</strong> Pizza, Mozzarella Stick, Lasagna</p>
            </div>

        </div>
    </section>

    <section class="w-full p-8">
        <div class="w-full">
            <h1 class="text-xl font-semibold text-gray-800 my-4">Produk Lainnya</h1>
            <div class="relative">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="relative bg-white rounded-[30px] shadow-lg p-5 flex flex-col justify-between transition-transform duration-300 ease-in-out group">
                        <div class="relative w-full h-[200px] rounded-xl overflow-visible">
                            <div class="absolute inset-0 bg-blue-400 transition duration-500 rounded-xl group-hover:brightness-110"></div>
                            <img src="/assets/images/produk-1.png" alt="Wincheez Mozarella"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out scale-100 group-hover:scale-125 group-hover:-translate-y-3 group-hover:translate-y-1 group-hover:z-10">
                        </div>
                        <div class="text-center mt-4">
                            <h3 class="text-lg font-semibold text-blue-800 group-hover:text-blue-600">Wincheez Mozarella</h3>
                            <p class="text-blue-800 group-hover:text-gray-800">Extra Stretch</p>
                        </div>
                        <button class="mt-2 border-2 border-blue-800 text-blue-800 px-4 py-1 rounded-full transition-all duration-300 ease-in-out hover:bg-blue-800 hover:text-white hover:scale-105 hover:shadow-md">
                            Beli Sekarang
                        </button>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative bg-white rounded-[30px] shadow-lg p-5 flex flex-col justify-between transition-transform duration-300 ease-in-out group">
                        <div class="relative w-full h-[200px] rounded-xl overflow-visible">
                            <div class="absolute inset-0 bg-blue-400 transition duration-500 rounded-xl group-hover:brightness-110"></div>
                            <img src="/assets/images/produk-2.png" alt="Wincheez Mozarella"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out scale-100 group-hover:scale-125 group-hover:-translate-y-3 group-hover:translate-y-1 group-hover:z-10">
                        </div>
                        <div class="text-center mt-4">
                            <h3 class="text-lg font-semibold text-blue-800 group-hover:text-blue-600">Wincheez Mozarella</h3>
                            <p class="text-blue-800 group-hover:text-gray-800">Extra Stretch</p>
                        </div>
                        <button class="mt-2 border-2 border-blue-800 text-blue-800 px-4 py-1 rounded-full transition-all duration-300 ease-in-out hover:bg-blue-800 hover:text-white hover:scale-105 hover:shadow-md">
                            Beli Sekarang
                        </button>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative bg-white rounded-[30px] shadow-lg p-5 flex flex-col justify-between transition-transform duration-300 ease-in-out group">
                        <div class="relative w-full h-[200px] rounded-xl overflow-visible">
                            <div class="absolute inset-0 bg-blue-400 transition duration-500 rounded-xl group-hover:brightness-110"></div>
                            <img src="/assets/images/produk-1.png" alt="Wincheez Mozarella"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out scale-100 group-hover:scale-125 group-hover:-translate-y-3 group-hover:translate-y-1 group-hover:z-10">
                        </div>
                        <div class="text-center mt-4">
                            <h3 class="text-lg font-semibold text-blue-800 group-hover:text-blue-600">Wincheez Mozarella</h3>
                            <p class="text-blue-800 group-hover:text-gray-800">Extra Stretch</p>
                        </div>
                        <button class="mt-2 border-2 border-blue-800 text-blue-800 px-4 py-1 rounded-full transition-all duration-300 ease-in-out hover:bg-blue-800 hover:text-white hover:scale-105 hover:shadow-md">
                            Beli Sekarang
                        </button>
                    </div>

                    <!-- Card 4 -->
                    <div class="relative bg-white rounded-[30px] shadow-lg p-5 flex flex-col justify-between transition-transform duration-300 ease-in-out group">
                        <div class="relative w-full h-[200px] rounded-xl overflow-visible">
                            <div class="absolute inset-0 bg-blue-400 transition duration-500 rounded-xl group-hover:brightness-110"></div>
                            <img src="/assets/images/produk-4.png" alt="Wincheez Mozarella"
                                class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 ease-in-out scale-100 group-hover:scale-125 group-hover:-translate-y-3 group-hover:translate-y-1 group-hover:z-10">
                        </div>
                        <div class="text-center mt-4">
                            <h3 class="text-lg font-semibold text-blue-800 group-hover:text-blue-600">Wincheez Mozarella</h3>
                            <p class="text-blue-800 group-hover:text-gray-800">Extra Stretch</p>
                        </div>
                        <button class="mt-2 border-2 border-blue-800 text-blue-800 px-4 py-1 rounded-full transition-all duration-300 ease-in-out hover:bg-blue-800 hover:text-white hover:scale-105 hover:shadow-md">
                            Beli Sekarang
                        </button>
                    </div>
                </div>
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
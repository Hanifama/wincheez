<section class="mt-10 p-4 relative w-full flex justify-center items-center">
    <div class="relative w-full h-auto">
        <!-- Gambar Dasar (Paling Bawah) - Hanya muncul di perangkat desktop dan tablet -->
        <img src="assets/images/s-1.png" alt="Banner" class="w-full h-auto object-cover relative z-0 sm:hidden md:block lg:block">

        <!-- Gambar Dasar (Paling Bawah) - Hanya muncul di perangkat tablet dan desktop -->
        <img src="assets/images/s-2.png" alt="Banner" class="absolute lg:bottom-[12px] lg:right-[39px] sm:bottom-[5px] sm:right-[20px] md:bottom-[5px] md:right-[25px] w-auto h-auto sm:h-[320px] lg:h-[625px] object-cover z-10 sm:block md:block lg:block">

        <img src="assets/images/s-3.png" alt="Banner" class="absolute top-[50px] sm:top-[80px] md:top-[100px] right-[50px] sm:right-[150px] md:right-[300px] sm:w-[50px] md:w-1/4 h-auto object-cover z-10 sm:block md:block lg:block">

        <img src="assets/images/s-4.png" alt="Banner" class="absolute top-[40px] sm:top-[50px] md:top-[63px] left-3 sm:left-4 md:left-5 w-[100px] sm:w-[120px] md:w-[150px] h-auto object-cover z-10 sm:block md:block lg:block">

        <img src="assets/images/s-5.png" alt="Banner" class="absolute top-[200px] sm:top-[250px] md:top-[290px] left-[50%] sm:left-[55%] md:left-[620px] transform -translate-x-1/2 -translate-y-1/2 w-16 h-16 h-auto object-cover z-10 sm:block md:block lg:block">
    </div>

    <div class="absolute left-[120px] bottom-[180px] grid grid-cols-3 gap-2 hidden lg:grid">
        <!-- Baris pertama dengan 3 kolom -->
        <div class="flex col-span-3 space-x-4 items-center">
            <!-- TikTok Link dan Icon -->
            <a href="https://www.tiktok.com" target="_blank" class="flex items-center space-x-2">
                <img src="path-to-your-tiktok-icon.png" alt="TikTok" class="w-6 h-6">
                <span>WINCheez.id</span>
            </a>

            <!-- Instagram Link dan Icon -->
            <a href="https://www.instagram.com" target="_blank" class="flex items-center space-x-2">
                <img src="path-to-your-instagram-icon.png" alt="Instagram" class="w-6 h-6">
                <span>WINCHeez_id</span>
            </a>

            <!-- Facebook Link dan Icon -->
            <a href="https://www.facebook.com" target="_blank" class="flex items-center space-x-2">
                <img src="path-to-your-facebook-icon.png" alt="Facebook" class="w-6 h-6">
                <span>WINCheez.id</span>
            </a>
        </div>
    </div>

    <!-- Gambar Banner (Hanya untuk tampilan mobile) -->
    <img src="assets/images/banner.png" alt="Banner" class="w-full h-auto object-cover relative z-0 sm:block md:block lg:hidden">


    <div class="md:w-[505px] md:h-[280px] md:left-[85px] md:top-[190px] w-1/2 absolute inset-0 flex items-center justify-center cursor-pointer z-10" id="videoTrigger">
        <!-- Iframe hanya tampil di perangkat desktop -->
        <iframe
            class="w-full h-full rounded-2xl z-0 hidden lg:block"
            src="https://www.youtube.com/embed/61EE8UCJQXY"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>

        <!-- Span tampil di perangkat selain desktop -->
        <span class="w-full h-full absolute lg:w-full lg:h-full sm:w-1/2 sm:h-1/2 lg:left-0 lg:bottom-0 sm:left-[20px] sm:bottom-[180px] rounded-2xl cursor-pointer bg-white bg-opacity-5 z-10"></span>
    </div>

    <!-- Modal Popup -->
    <div id="videoModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
        <div class="relative w-full max-w-[800px] h-[50vh] sm:h-[60vh] md:h-[70vh] lg:h-[450px]">
            <iframe class="w-full h-full rounded-xl" id="modalIframe" src="" frameborder="0" allowfullscreen></iframe>
            <button id="closeModal" class="absolute top-2 right-2 text-white text-2xl font-bold">X</button>
        </div>
    </div>
</section>
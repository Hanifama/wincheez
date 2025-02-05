<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WINCHEEZ | Wincheez Indonesia</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Libre+Baskerville&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <!-- Navbar Section -->
    <?php echo $navbar; ?>

    <!-- Hero Section -->
    <?php echo $heroSection; ?>

    <!-- Product Slider Section -->
    <?= $productSlider ?>

    <!-- Banner Section -->
    <?php echo $bannerSection; ?>

    <!-- Feature Section -->
    <?php echo $featureSection; ?>

    <!-- Introduction Section -->
    <?php echo $introductionSection; ?>

    <!-- Sosmed Section -->
    <?php echo $sosmedSection; ?>

    <!-- Banner Temp Section -->
    <?php echo $bannerTempSection; ?>

    <!-- Featured Creation Section -->
    <?php echo $featuredCreationSection; ?>

    <!-- Footer Section -->
    <?php echo $footer; ?>

</body>

<!-- At the end of your body tag -->
<script src="assets/js/navbar.js"></script>
<script src="assets/js/product-slider.js"></script>
<script src="assets/js/youtube-player.js"></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/sosmed-slider.js"></script>
<script src="assets/js/footer.js"></script>

</html>
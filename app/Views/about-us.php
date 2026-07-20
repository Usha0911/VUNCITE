<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?= $this->include('layout/head-links'); ?>
</head>
<body>
    <?= $this->include('layout/header'); ?>

<!-- About Us Banner -->
<section class="relative h-[300px] md:h-[400px] lg:h-[450px] overflow-hidden">

    <!-- Background Image -->
    <img src="images/about-banner.jpg"
        alt="About Us"
        class="absolute inset-0 w-full h-full object-cover">

    <!-- Navy Blue Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#081B47]/95 via-[#0B1F4D]/80 to-transparent"></div>

    <!-- Gold Glow -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#D4AF37]/10 blur-[120px] rounded-full"></div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto h-full flex items-center px-6 lg:px-12">

        <div class="max-w-2xl">

            <!-- Gold Line -->
            <div class="w-20 h-1 bg-[#D4AF37] rounded-full mb-6"></div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight">
                About
                <span class="text-[#D4AF37]">Us</span>
            </h1>

            <p class="mt-6 text-gray-200 text-lg leading-8 max-w-xl">
                Empowering students through quality education, innovation,
                and excellence. We shape future leaders with globally
                recognized programs and industry-focused learning.
            </p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex items-center text-sm">

                <a href="/" class="text-white hover:text-[#D4AF37] transition">
                    Home
                </a>

                <span class="mx-3 text-[#D4AF37]">/</span>

                <span class="text-[#D4AF37] font-medium">
                    About Us
                </span>

            </div>

        </div>

    </div>

</section>
<?= $this->include('layout/footer'); ?>
</body>
</html>
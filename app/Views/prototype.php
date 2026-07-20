<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VUNCITE | Prototype Development</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary": "#7b5900",
                    "primary-fixed": "#dee0ff",
                    "on-secondary-fixed-variant": "#5d4200",
                    "on-primary-fixed": "#0a154d",
                    "inverse-on-surface": "#f2f0f5",
                    "tertiary-fixed": "#ffdbcf",
                    "surface-container-high": "#eae7ed",
                    "inverse-primary": "#bbc3ff",
                    "secondary-fixed-dim": "#fdbb12",
                    "on-surface-variant": "#454650",
                    "surface-container-highest": "#e4e1e7",
                    "primary-fixed-dim": "#bbc3ff",
                    "inverse-surface": "#303034",
                    "primary-container": "#0a154d",
                    "surface-container-lowest": "#ffffff",
                    "surface-variant": "#e4e1e7",
                    "secondary-fixed": "#ffdea4",
                    "on-tertiary": "#ffffff",
                    "surface-bright": "#fbf8fe",
                    "on-surface": "#1b1b1f",
                    "surface-container": "#f0edf2",
                    "tertiary-fixed-dim": "#ffb59c",
                    "on-primary-fixed-variant": "#39427b",
                    "on-primary-container": "#7680bd",
                    "on-secondary-container": "#6c4d00",
                    "primary": "#000000",
                    "on-tertiary-fixed": "#380c00",
                    "on-secondary": "#ffffff",
                    "on-primary": "#ffffff",
                    "error": "#ba1a1a",
                    "surface-container-low": "#f5f2f8",
                    "surface": "#fbf8fe",
                    "on-background": "#1b1b1f",
                    "surface-tint": "#515a95",
                    "secondary-container": "#fdbb12",
                    "outline-variant": "#c6c5d1",
                    "on-tertiary-fixed-variant": "#703621",
                    "on-tertiary-container": "#b97158",
                    "on-error-container": "#93000a",
                    "error-container": "#ffdad6",
                    "tertiary": "#000000",
                    "outline": "#767681",
                    "background": "#fbf8fe",
                    "tertiary-container": "#380c00",
                    "surface-dim": "#dbd9de",
                    "on-secondary-fixed": "#261900",
                    "on-error": "#ffffff"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "lg": "48px",
                    "margin-mobile": "20px",
                    "container-max": "1280px",
                    "md": "24px",
                    "sm": "16px",
                    "xs": "8px",
                    "gutter": "24px",
                    "xl": "80px",
                    "base": "4px"
            },
            "fontFamily": {
                    "headline-xl": ["Outfit"],
                    "body-sm": ["Inter"],
                    "headline-md": ["Outfit"],
                    "display-lg": ["Outfit"],
                    "headline-lg": ["Outfit"],
                    "body-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "display-lg-mobile": ["Outfit"],
                    "label-md": ["Inter"]
            },
            "fontSize": {
                    "headline-xl": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "500"}],
                    "display-lg": ["64px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "display-lg-mobile": ["40px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600"}],
                    "label-md": ["12px", {"lineHeight": "1.2", "letterSpacing": "0.05em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(9, 20, 77, 0.08);
            box-shadow: 0 4px 24px rgba(5, 12, 52, 0.04);
        }
        .dark .glass-card {
            background: rgba(10, 21, 77, 0.3);
            border: 1px solid rgba(222, 224, 255, 0.1);
        }
        .vuncite-gradient {
            background: linear-gradient(135deg, #0a154d 0%, #39427b 100%);
        }
        .text-glow {
            text-shadow: 0 0 20px rgba(187, 195, 255, 0.3);
        }
        .parallax-bg {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed overflow-x-hidden">
<!-- Top Navigation Bar -->
<header class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-lg border-b border-outline-variant/10 shadow-sm transition-all duration-300">
<div class="flex justify-between items-center h-20 px-8 lg:px-xl max-w-container-max mx-auto">
<div class="flex items-center gap-4">
<img alt="VUNCITE Logo" class="h-10 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1v20FnZI1-o54Peic2432mfd5dDsjkl8xjrv_e5N5Jjul-HhVPKe_xGfk5IauBmjPZ9EE7cNcwseK2aEnAqGtQkSC0B-mFJm4WjOxC30esLD1UqKDZB3yEAwlyMM_NFmI7IiJ_dauzBeO7BgQnlog6IWWqHU8haTEbwoaaYoppW99dvghwgY-5QMsgfQ1wxDXro4gQRZE1YG9q5CViMhKWGCJ7IzCUgE5m4NjJv2HRt0Y5qXLFT7kpg4F_TzRzOH9PSk"/>
<span class="font-headline-md text-headline-md font-bold tracking-tight text-primary dark:text-primary-fixed">VUNCITE</span>
</div>
<nav class="hidden md:flex items-center gap-lg">
<a class="font-label-md text-label-md text-on-surface-variant dark:text-on-surface hover:text-primary dark:hover:text-primary-fixed transition-colors" href="#">Home</a>
<a class="font-label-md text-label-md text-on-surface-variant dark:text-on-surface hover:text-primary dark:hover:text-primary-fixed transition-colors" href="#">About</a>
<a class="font-label-md text-label-md text-primary dark:text-primary-fixed font-bold border-b-2 border-primary dark:border-primary-fixed pb-1" href="#">Workshops</a>
<a class="font-label-md text-label-md text-on-surface-variant dark:text-on-surface hover:text-primary dark:hover:text-primary-fixed transition-colors" href="#">Gallery</a>
<a class="font-label-md text-label-md text-on-surface-variant dark:text-on-surface hover:text-primary dark:hover:text-primary-fixed transition-colors" href="#">Blog</a>
</nav>
<div class="flex items-center gap-md">
<button class="hidden lg:block font-label-md text-label-md px-md py-xs rounded-xl text-on-surface-variant hover:bg-primary/5 transition-all">Contact</button>
<button class="bg-primary text-on-primary px-md py-xs rounded-xl font-label-md text-label-md hover:scale-105 active:scale-95 transition-all shadow-md">Get Started</button>
</div>
</div>
</header>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden vuncite-gradient text-white">
<div class="absolute inset-0 z-0">

</div>
<div class="relative z-10 max-w-container-max mx-auto px-8 lg:px-xl w-full grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div class="space-y-md">
<div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full border border-white/20">
<span class="material-symbols-outlined text-[16px]">rocket_launch</span>
<span class="font-label-md text-label-md uppercase tracking-widest">Future-Ready Prototypes</span>
</div>
<h1 class="font-display-lg text-display-lg md:text-display-lg leading-tight text-glow">
                        From Concept to <br/><span class="text-secondary-fixed">Connected Reality.</span>
</h1>
<p class="font-body-lg text-body-lg text-white/80 max-w-xl">
                        VUNCITE accelerates your vision through high-performance IoT and Embedded Systems prototyping. We transform abstract ideas into production-ready technical architecture.
                    </p>
<div class="flex flex-wrap gap-md pt-xs">
<button class="bg-secondary-fixed text-on-secondary-fixed px-lg py-4 rounded-xl font-label-md text-label-md hover:shadow-xl transition-all flex items-center gap-2">
                            Explore Capabilities <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="border border-white/30 backdrop-blur-sm px-lg py-4 rounded-xl font-label-md text-label-md hover:bg-white/10 transition-all">
                            View Case Studies
                        </button>
</div>
</div>
<div class="hidden lg:block">
<div class="relative">
<div class="absolute -inset-4 bg-secondary-fixed/20 blur-3xl rounded-full"></div>
<div class="glass-card p-4 rounded-[40px] relative overflow-hidden border-white/20">
<img class="w-full aspect-[4/3] object-cover rounded-[32px] shadow-2xl" data-alt="A high-tech macro photography shot of a sleek, dark-blue embedded circuit board with glowing golden tracers and pulsing LED lights. The aesthetic is ultra-modern and technical, featuring sharp focus and deep shadows to emphasize precision engineering and high-end hardware development in an industrial-chic setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBa72OMRku2KZvRtkR4Xcy2jp8zkhRFme5cUqEpNXy6hH6RmsYM4XgIrTy7Fc9fKc-WrAGdhDO71DB-HPgPtYZlJ2T5jG1GfZsRcSnj5v5cLhRdA_lyGXqAf9Ztp3fqih03veimDjgXa7dFHDGoIIJ8GleNH-pUhsrBrOwj9B2N1kJt63CGUesjBIWVqdgJtLV2AnNZQpgoabX8681WL5O-KbHFHz4qc4h4Xxv25OBXDqPaDiGPioZRrg"/>
</div>
</div>
</div>
</div>
</section>
<!-- Design Thinking Process (Bento Grid) -->
<section class="py-xl bg-surface">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="text-center mb-xl space-y-4">
<h2 class="font-headline-lg text-headline-lg text-primary">The VUNCITE Methodology</h2>
<p class="text-on-surface-variant font-body-md max-w-2xl mx-auto">Our iterative approach ensures technical robustness while maintaining human-centric design principles from day one.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Stage 1 -->
<div class="md:col-span-8 glass-card p-xl rounded-[20px] flex flex-col justify-between group hover:-translate-y-2 transition-all duration-300">
<div class="space-y-md">
<div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined">psychology</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary">Empathize &amp; Define</h3>
<p class="text-on-surface-variant text-body-md max-w-lg">We dive deep into your industry's pain points. Our design thinking workshops bridge the gap between user needs and technical feasibility, setting a solid foundation for your IoT ecosystem.</p>
</div>
<div class="mt-lg flex items-center gap-xs text-primary font-label-md uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity">
                            Read Case Study <span class="material-symbols-outlined text-[16px]">north_east</span>
</div>
</div>
<!-- Stage 2 -->
<div class="md:col-span-4 bg-primary text-on-primary p-xl rounded-[20px] shadow-xl hover:-translate-y-2 transition-all duration-300">
<div class="flex flex-col h-full gap-lg">
<span class="material-symbols-outlined text-secondary-fixed text-[48px]">lightbulb</span>
<h3 class="font-headline-md text-headline-md">Ideate Fast</h3>
<p class="text-white/70 text-body-md">Rapid conceptualization using low-fidelity models to validate core logic before hardware investment.</p>
</div>
</div>
<!-- Stage 3 -->
<div class="md:col-span-4 glass-card p-xl rounded-[20px] hover:-translate-y-2 transition-all duration-300">
<div class="flex flex-col h-full gap-lg">
<span class="material-symbols-outlined text-primary text-[48px]">terminal</span>
<h3 class="font-headline-md text-headline-md text-primary">Firmware Dev</h3>
<p class="text-on-surface-variant text-body-md">Optimized C/C++ development for ARM Cortex, ESP32, and proprietary architectures.</p>
</div>
</div>
<!-- Stage 4 -->
<div class="md:col-span-8 relative overflow-hidden rounded-[20px] min-h-[300px] hover:-translate-y-2 transition-all duration-300">
<div class="absolute inset-0 bg-cover bg-center" data-alt="A clean, minimalist laboratory setting featuring a high-precision 3D printer in mid-operation, crafting a complex white enclosure for a device. Soft, diffused lighting highlights the clean surfaces and metallic textures. The background is slightly blurred, showing digital screens with CAD designs and line-art blueprints in deep blue and gold tones." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDWo5feBivlUiTp1GqO25nrv6lLCOUC4MfcrijEH6Z0WeWEJCPfPFlTD3yvr23Yd_k-2GmVe8XxtmIlYCOYfe4w8Glpw3x2J5vPKPVHdOAczop7vNuAuCTfTTRQlpfhrDR1fJpG6cmmbImQb2rjMGpRu2ta1fXowIjHSiQ1XO-xIsh7M0LecJ1QtwMJZ6inlRkhyYLzF8iDwqGaZc2uzX1s3cMaUPw2Do3u-29h_5BxQMpLanyJoTjA4Q')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 to-transparent flex flex-col justify-end p-xl text-white">
<h3 class="font-headline-md text-headline-md">Hardware Prototyping</h3>
<p class="text-white/70 text-body-md mt-2">In-house CNC, 3D Printing, and PCB assembly for functional physical models.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Technical Support Section -->
<section class="py-xl bg-surface-container-low overflow-hidden">
<div class="max-w-container-max mx-auto px-8 lg:px-xl grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div class="relative order-2 lg:order-1">
<div class="absolute -top-xl -left-xl w-64 h-64 bg-primary-fixed/30 blur-3xl rounded-full"></div>
<div class="grid grid-cols-2 gap-md">
<div class="glass-card p-md rounded-xl space-y-xs">
<span class="material-symbols-outlined text-secondary">wifi</span>
<h4 class="font-bold text-primary">Connectivity</h4>
<p class="text-label-md text-on-surface-variant">LoraWAN, BLE, WiFi6, &amp; Thread</p>
</div>
<div class="glass-card p-md rounded-xl space-y-xs translate-y-lg">
<span class="material-symbols-outlined text-secondary">shield</span>
<h4 class="font-bold text-primary">Security</h4>
<p class="text-label-md text-on-surface-variant">End-to-end hardware encryption</p>
</div>
<div class="glass-card p-md rounded-xl space-y-xs">
<span class="material-symbols-outlined text-secondary">database</span>
<h4 class="font-bold text-primary">Cloud Sync</h4>
<p class="text-label-md text-on-surface-variant">AWS &amp; Azure IoT Integration</p>
</div>
<div class="glass-card p-md rounded-xl space-y-xs translate-y-lg">
<span class="material-symbols-outlined text-secondary">developer_board</span>
<h4 class="font-bold text-primary">Custom PCBs</h4>
<p class="text-label-md text-on-surface-variant">Multi-layer rigid-flex design</p>
</div>
</div>
</div>
<div class="space-y-md order-1 lg:order-2">
<h2 class="font-headline-xl text-headline-xl text-primary">End-to-End Technical <br/>Execution.</h2>
<p class="text-on-surface-variant font-body-lg">Beyond just hardware, we provide the full stack required to make your prototype functional in the real world.</p>
<ul class="space-y-4">
<li class="flex items-center gap-md">
<div class="flex-shrink-0 w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-[18px] text-on-secondary-fixed">check</span>
</div>
<span class="text-on-surface font-body-md">Low-power optimization for battery-operated devices</span>
</li>
<li class="flex items-center gap-md">
<div class="flex-shrink-0 w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-[18px] text-on-secondary-fixed">check</span>
</div>
<span class="text-on-surface font-body-md">Real-time data visualization and dashboarding</span>
</li>
<li class="flex items-center gap-md">
<div class="flex-shrink-0 w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-[18px] text-on-secondary-fixed">check</span>
</div>
<span class="text-on-surface font-body-md">Over-the-air (OTA) update implementations</span>
</li>
</ul>
<div class="pt-md">
<a class="inline-flex items-center gap-xs text-primary font-bold border-b border-primary hover:gap-md transition-all" href="#">
                            Talk to an engineer <span class="material-symbols-outlined">arrow_right_alt</span>
</a>
</div>
</div>
</div>
</section>
<!-- Showcase Section -->
<section class="py-xl bg-white">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="flex flex-col md:flex-row justify-between items-end gap-md mb-xl">
<div class="max-w-xl">
<h2 class="font-headline-lg text-headline-lg text-primary">Prototype Showcase</h2>
<p class="text-on-surface-variant font-body-md mt-4">Witness the physical manifestation of innovation. These are not just concepts, they are working proofs-of-concept ready for the next stage.</p>
</div>
<div class="flex gap-sm">
<button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container transition-all">
<span class="material-symbols-outlined">chevron_left</span>
</button>
<button class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center hover:shadow-lg transition-all">
<span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Project 1 -->
<div class="group">
<div class="relative overflow-hidden rounded-2xl mb-md h-[400px]">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="A sleek, modern smart-home hub prototype in a frosted white shell, sitting on a minimalist oak desk. The device features a subtle circular LED ring glowing in soft blue. Soft morning light enters from a large window in the background, creating a serene, domestic environment that highlights the device's elegant industrial design." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSf0L4kSbgg-eHgW8waPGN3xC8V4BMDMj3zkD1nhfPBViP3qfNw6usy_CMkZ-eOzMN0kJuvSgF0DwSHuRUacnhP8uG38fAMbdDxE2XmWqGRozrlToFlBUZDbBluJ3FWDlAXJkFGdNKaEA_IKS4-mLctgSItCJw3TpwYI6vuqY8hoPMKhuzKkazR9L1aYoufbX-5NavFovxdF9DbvTvV32KpQ4jPhGSI9vL1onn-RGwHwFio4wWe3rc8A"/>
<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
<button class="bg-white text-primary px-md py-xs rounded-full font-label-md shadow-xl">View Details</button>
</div>
</div>
<div class="space-y-xs">
<span class="text-label-md font-label-md text-secondary uppercase tracking-widest">Smart Home</span>
<h3 class="font-headline-md text-headline-md text-primary">Aura Hub v2.0</h3>
<p class="text-body-sm text-on-surface-variant">Multiprotocol bridge with localized machine learning.</p>
</div>
</div>
<!-- Project 2 -->
<div class="group">
<div class="relative overflow-hidden rounded-2xl mb-md h-[400px]">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="A rugged, industrial IoT sensor unit mounted on a weathered steel pipe in a dark factory setting. The device is compact, with a matte black finish and heavy-duty connectors. A small digital display shows green fluctuating data lines. The atmosphere is moody and cinematic, with sharp rim lighting against the dark, industrial background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdYMCXkAW6cdqCxo1QdXyXFeqMtwmVzN2K2cEgew0M9-GtFTar04D8BP4O49wOiz9ojI9EJ2nO3lE9wsVrpAGRgjhCP1UwYuisD6YEkXPW6NhmRmuaZyiqLAcUpaNcatKaytl-6V96zZ1nlfxFis7VVyVK7SpfIik5lluRy1zih9DtwGZBif9g_UqhOAFzcD3UlD3WtUfEab_9fQ3b8S8ptTzpcxTKEqLaDeQiI9FTrx_rCXFVzBc8IA"/>
<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
<button class="bg-white text-primary px-md py-xs rounded-full font-label-md shadow-xl">View Details</button>
</div>
</div>
<div class="space-y-xs">
<span class="text-label-md font-label-md text-secondary uppercase tracking-widest">Industrial IoT</span>
<h3 class="font-headline-md text-headline-md text-primary">Titan-Node X</h3>
<p class="text-body-sm text-on-surface-variant">Vibration and thermal analysis for predictive maintenance.</p>
</div>
</div>
<!-- Project 3 -->
<div class="group">
<div class="relative overflow-hidden rounded-2xl mb-md h-[400px]">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="A minimalist wearable health monitor prototype, featuring a thin, flexible band and a polished metallic sensor pod. It is elegantly displayed on a glass stand within a high-end futuristic medical clinic. Soft, cool-toned lighting accentuates the sleek curves and premium materials, emphasizing the fusion of fashion and health technology." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBpjDHn41_EqzoUOgEYxb3ZK8pWih7pL-8J8YZeeGqZQhE-KMT9ScO_OJyts3ju2liZZ8g9kEkQPrHI__ZJYk9bnrLvUU4RtG2JE-j8T1PqPTHJaXzbLhzN_J4gx_6gY_JD6tYDJX1053V_TxUKJBwV9h2UtjmYoY2QwNFpeBBbq09ODpMsYqpDjX1x9kbEQyW3d91QESn2uR0i16ZkeG1hzVRxDiqY7g2FwXfLsSAn9CntwMZbB77tw"/>
<div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
<button class="bg-white text-primary px-md py-xs rounded-full font-label-md shadow-xl">View Details</button>
</div>
</div>
<div class="space-y-xs">
<span class="text-label-md font-label-md text-secondary uppercase tracking-widest">HealthTech</span>
<h3 class="font-headline-md text-headline-md text-primary">Vital-Patch S</h3>
<p class="text-body-sm text-on-surface-variant">Continuous biosensor monitoring with low-power BLE.</p>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-xl vuncite-gradient text-white">
<div class="max-w-container-max mx-auto px-8 lg:px-xl text-center">
<div class="inline-block p-4 rounded-full bg-white/10 backdrop-blur-md mb-md">
<span class="material-symbols-outlined text-[40px] text-secondary-fixed" data-weight="fill">bolt</span>
</div>
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-md">Ready to build the future?</h2>
<p class="text-body-lg text-white/80 max-w-2xl mx-auto mb-lg">Let's discuss how VUNCITE's technical expertise can turn your vision into a high-performance working prototype.</p>
<div class="flex flex-col sm:flex-row gap-md justify-center">
<button class="bg-secondary-fixed text-on-secondary-fixed px-lg py-4 rounded-xl font-headline-md text-headline-md hover:shadow-2xl transition-all">Schedule a Call</button>
<button class="border border-white/40 px-lg py-4 rounded-xl font-headline-md text-headline-md hover:bg-white/10 transition-all">Download Portfolio</button>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-tertiary-container w-full pt-xl pb-md border-t border-outline-variant/20">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-8 lg:px-xl max-w-container-max mx-auto">
<div class="space-y-md">
<div class="flex items-center gap-4">
<img alt="VUNCITE Logo" class="h-8 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAtcYb9VRqdivt2psgJq8qG_afKgyNa8cBx4VIrTaOUfK3KGhpINodbixisv4CfEa9PTWsaoNtPsZG4QOYpde3KvBJzHcbrbFsenPlnMZFbgysM43oCkgqgjCdSu8XCR9sZ49seIeApmqpJ6oinnjSWC46O-wweibWQNXvnoLgdeCHEHcBw5RQpTitkSu4THksbMllyoyzG4RuC1yzcOGjkOtzqWR8FqcKuxLNrSslBSDJn6cgIhOeoPsq2pS6Jt7zNRM"/>
<span class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed">VUNCITE</span>
</div>
<p class="text-on-surface-variant dark:text-on-tertiary-fixed-variant text-body-sm max-w-xs">
                    Pioneering the nexus of design thinking and embedded engineering to build the next generation of smart products.
                </p>
<div class="flex gap-md">
<a class="w-10 h-10 rounded-full bg-surface flex items-center justify-center hover:text-primary transition-colors border border-outline-variant/30" href="#">
<span class="material-symbols-outlined text-[20px]">share</span>
</a>
<a class="w-10 h-10 rounded-full bg-surface flex items-center justify-center hover:text-primary transition-colors border border-outline-variant/30" href="#">
<span class="material-symbols-outlined text-[20px]">mail</span>
</a>
</div>
</div>
<div class="space-y-md">
<h4 class="font-label-md text-label-md uppercase tracking-widest text-primary">Navigation</h4>
<ul class="space-y-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">About Us</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Services</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Workshops</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Gallery</a></li>
</ul>
</div>
<div class="space-y-md">
<h4 class="font-label-md text-label-md uppercase tracking-widest text-primary">Legal</h4>
<ul class="space-y-sm">
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors" href="#">Cookie Policy</a></li>
</ul>
</div>
<div class="space-y-md">
<h4 class="font-label-md text-label-md uppercase tracking-widest text-primary">Newsletter</h4>
<p class="text-body-sm text-on-surface-variant">Stay updated with the latest in IoT innovation.</p>
<div class="flex gap-2">
<input class="bg-surface border-outline-variant/30 rounded-xl px-4 py-2 w-full text-body-sm focus:ring-primary focus:border-primary" placeholder="Email address" type="email"/>
<button class="bg-primary text-on-primary p-2 rounded-xl">
<span class="material-symbols-outlined">send</span>
</button>
</div>
</div>
</div>
<div class="mt-xl border-t border-outline-variant/10 pt-md text-center">
<p class="text-label-md text-on-surface-variant">© 2024 VUNCITE Technology. All rights reserved.</p>
</div>
</footer>
<script>
        // Subtle interaction for the header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md', 'py-1');
                header.classList.remove('h-20');
                header.classList.add('h-16');
            } else {
                header.classList.remove('shadow-md', 'py-1', 'h-16');
                header.classList.add('h-20');
            }
        });

        // Simple Intersection Observer for scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.glass-card').forEach(el => {
            el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
            observer.observe(el);
        });
    </script>
</body></html>
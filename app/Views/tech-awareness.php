<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VUNCITE | Technology Awareness Workshops</title>
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
                        "primary": "#09144D",
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
                }
            }
        }
    </script>
<style>
        body {
            background-color: #FAFBFF;
            color: #1b1b1f;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(9, 20, 77, 0.08);
            box-shadow: 0 4px 24px rgba(5, 12, 52, 0.04);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .text-gradient {
            background: linear-gradient(135deg, #09144D 0%, #39427b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-mesh {
            background: radial-gradient(at 0% 0%, rgba(187, 195, 255, 0.15) 0%, transparent 50%),
                        radial-gradient(at 100% 100%, rgba(253, 187, 18, 0.05) 0%, transparent 50%);
        }
        .active-tab {
            border-bottom: 2px solid #09144D;
            color: #09144D;
            font-weight: 700;
        }
    </style>
</head>
<body class="font-body-md overflow-x-hidden">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-lg border-b border-outline-variant/10 shadow-sm">
<div class="flex justify-between items-center h-20 px-8 lg:px-xl max-w-container-max mx-auto">
<div class="flex items-center gap-3">
<img alt="VUNCITE Logo" class="h-10 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwAB-I_aRboH_j26gOiCOyZgvPN7SweX5li9i_HgukrAdoWe4fWMcXfyPN4n3rlON28_6pDnixZnw5tr-gUpP4TF5CwEJ7k_9g29d40HC4Ka9jjEyz2nnwIUU_EmdFlXMVp8-PVEupe_sZO4-Nfx1nGGm5EYNshzppxFxGU5gySZQSV19F2vUB2u_7tsfJ7LPWPN9B9cRS0o7dTJKzlq4CrwAxvMmpT9Mukox-it-h4cN866nW4Kor8y9vtOlZY6WiMH0"/>
</div>
<div class="hidden md:flex items-center gap-lg">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Home</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">About</a>
<a class="font-label-md text-label-md text-primary font-bold border-b-2 border-primary pb-1" href="#">Workshops</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Gallery</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Blog</a>
</div>
<div class="flex items-center gap-sm">
<button class="hidden lg:block font-label-md text-label-md text-primary px-sm py-xs hover:bg-primary/5 rounded-xl transition-all">Contact</button>
<button class="bg-primary text-on-primary font-label-md text-label-md px-md py-3 rounded-xl shadow-md hover:scale-[1.02] active:scale-95 transition-all">Get Started</button>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative hero-mesh py-xl overflow-hidden">
<div class="max-w-container-max mx-auto px-8 lg:px-xl grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div class="space-y-md relative z-10">
<div class="inline-flex items-center gap-2 px-3 py-1 bg-primary/5 border border-primary/10 rounded-full">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="font-label-md text-label-md text-primary tracking-widest uppercase">Empowering the Future</span>
</div>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary leading-tight">
                        Demystifying the <span class="text-gradient">Tech Frontiers</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        VUNCITE Technology Awareness Workshops bridge the gap between curiosity and expertise. We introduce students to AI, Robotics, IoT, and Cybersecurity through immersive, hands-on experiences.
                    </p>
<div class="flex flex-wrap gap-md pt-xs">
<a class="bg-primary text-on-primary font-label-md text-label-md px-xl py-4 rounded-xl shadow-lg hover:shadow-primary/20 transition-all" href="#booking">Book a Workshop</a>
<a class="glass-panel text-primary font-label-md text-label-md px-xl py-4 rounded-xl flex items-center gap-2 group" href="#modules">
                            Explore Modules
                            <span class="material-symbols-outlined text-base group-hover:translate-x-1 transition-transform" data-icon="arrow_forward">arrow_forward</span>
</a>
</div>
</div>
<div class="relative">
<div class="relative z-10 glass-panel p-md rounded-[32px] overflow-hidden">
<img class="w-full aspect-[4/3] object-cover rounded-2xl" data-alt="A high-tech digital learning environment where diverse students are engaged with glowing holographic interfaces representing artificial intelligence and robotics. The scene is bright and airy with soft blue and gold ambient lighting reflecting the VUNCITE brand identity. High-end futuristic computer hardware is visible on sleek white desks in a minimalist laboratory setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDzSspclfUnOGyQNMyVa-NteuyKSdTixYhWQZVCxpTwzVPHQUHPE9pbfz6gKvfuCYIJLv6_4zHkvbW9OTEYQ7HKlIlIcxAsqNdgbrmWJueEaxoG3GcePrDRor1ZydohK8I_ZQneu6DAN1x1q2q7GhF0_cspI547aIAzVQHMl2VPJCzLlNl4VbmaImx9svXDnjljmnY1dBwxpJ3sPCkH3LEeiCfBt6JCsg43N-z8qRavezTUdgvr0AnnAw"/>
</div>
<!-- Decorative Elements -->
<div class="absolute -top-10 -right-10 w-40 h-40 bg-secondary/10 blur-3xl rounded-full"></div>
<div class="absolute -bottom-10 -left-10 w-64 h-64 bg-primary/5 blur-3xl rounded-full"></div>
</div>
</div>
</section>
<!-- Core Technologies / Modules Bento Grid -->
<section class="py-xl bg-white" id="modules">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="text-center space-y-xs mb-xl">
<h2 class="font-headline-lg text-headline-lg text-primary">Core Workshop Modules</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Focused learning pathways designed to inspire the next generation of technologists.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-md">
<!-- AI Module -->
<div class="md:col-span-8 group relative overflow-hidden rounded-[2rem] glass-panel p-lg hover:shadow-xl transition-all duration-300">
<div class="flex flex-col md:flex-row gap-lg">
<div class="flex-1 space-y-md">
<span class="material-symbols-outlined text-secondary text-5xl" data-icon="psychology">psychology</span>
<h3 class="font-headline-md text-headline-md text-primary">Artificial Intelligence</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Explore neural networks, machine learning models, and the ethics of AI. Students build their first simple predictive engine.</p>
<ul class="space-y-base">
<li class="flex items-center gap-2 text-on-surface-variant font-label-md"><span class="material-symbols-outlined text-primary text-sm" data-icon="check_circle">check_circle</span> Machine Learning Basics</li>
<li class="flex items-center gap-2 text-on-surface-variant font-label-md"><span class="material-symbols-outlined text-primary text-sm" data-icon="check_circle">check_circle</span> Prompt Engineering</li>
</ul>
</div>
<div class="flex-1">
<img class="w-full h-full object-cover rounded-2xl group-hover:scale-105 transition-transform duration-500" data-alt="A clean, minimalist 3D rendering of a human brain silhouette constructed from glowing blue fiber-optic networks. Deep navy blue background with golden electrical pulses traveling through the network nodes, representing the flow of information in artificial intelligence. The style is premium, technical, and elegant." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqBBvIoUu4yhbOFj-AT93pMGSJWv0pPzpyBITh_Fjfr__oS1SmDJ57F1Tl__yR1SvnFN11am83McvwUTN_axcjdRPKY0sgr4Z5uI38Yh77qIQqEyyaNSqMyRqY30Q-21Ns5TxrsXdgcBnULfJEDOULhYjTkcLE2EnFTRU71mQkhZJCd4ML8BFWkKcUz2bRT0hUDpTg_zj_0xRXFp0mMUsGP2CSN1h8wU_dPy2sqpUpLk2l27gPUOpW5A"/>
</div>
</div>
</div>
<!-- Robotics Module -->
<div class="md:col-span-4 group glass-panel p-lg rounded-[2rem] hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
<div class="space-y-md">
<span class="material-symbols-outlined text-primary text-5xl" data-icon="precision_manufacturing">precision_manufacturing</span>
<h3 class="font-headline-md text-headline-md text-primary">Robotics</h3>
<p class="font-body-md text-body-md text-on-surface-variant">From kinematics to autonomous control systems. Hands-on assembly and logic programming.</p>
</div>
<div class="mt-md">
<img class="w-full aspect-square object-cover rounded-2xl group-hover:rotate-1 transition-transform" data-alt="A macro shot of a sleek, white and brushed metal robotic arm performing a precise movement. Soft lighting illuminates the mechanical joints and carbon fiber components. The background is a clean, out-of-focus technical workshop in shades of gray and VUNCITE navy blue." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC62VU8Py7vtURgHF13cyvfLQ32E7SeXPyzfGHs-ligcFDIW0dL55dzBJMs7MedCejFlfpuo7QA0lrWfOVMN04UEzKvKmpMiZBE6xrRZOkMDL0he1nwPH_r5oHmymgaTQYZ9y1cKjHmxSCP9tFS0aWwifVh1O8iaU9xvmaE8Gg_zFddaEggPNY-Pv0Cqg11iYyU0foNHP5khZ6QmRB9JeERr0gAHJB_dCwxsFl8Ho0R8blhNEyiYigfqw"/>
</div>
</div>
<!-- IoT Module -->
<div class="md:col-span-4 group glass-panel p-lg rounded-[2rem] hover:shadow-xl transition-all duration-300 flex flex-col">
<div class="space-y-md flex-1">
<span class="material-symbols-outlined text-secondary text-5xl" data-icon="settings_remote">settings_remote</span>
<h3 class="font-headline-md text-headline-md text-primary">IoT Systems</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Connecting the physical world to the cloud through sensors, actuators, and smart data logging.</p>
</div>
<div class="mt-md bg-primary/5 p-4 rounded-xl">
<div class="flex justify-between items-center">
<span class="font-label-md text-primary">Connectivity Level</span>
<span class="font-label-md font-bold text-primary">98%</span>
</div>
<div class="w-full bg-outline-variant/30 h-1 rounded-full mt-2 overflow-hidden">
<div class="bg-secondary h-full w-[98%]"></div>
</div>
</div>
</div>
<!-- Cybersecurity Module -->
<div class="md:col-span-8 group relative overflow-hidden rounded-[2rem] glass-panel p-lg hover:shadow-xl transition-all duration-300">
<div class="flex flex-col md:flex-row-reverse gap-lg">
<div class="flex-1 space-y-md">
<span class="material-symbols-outlined text-primary text-5xl" data-icon="encrypted">encrypted</span>
<h3 class="font-headline-md text-headline-md text-primary">Cybersecurity</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Defending the digital perimeter. Learn cryptography, network scanning, and ethical hacking fundamentals.</p>
<div class="grid grid-cols-2 gap-sm pt-xs">
<div class="p-3 bg-error/5 border border-error/10 rounded-xl">
<div class="text-error font-bold text-xl">1.2M+</div>
<div class="text-[10px] text-on-surface-variant uppercase tracking-wider">Threats Blocked</div>
</div>
<div class="p-3 bg-secondary/5 border border-secondary/10 rounded-xl">
<div class="text-secondary font-bold text-xl">100%</div>
<div class="text-[10px] text-on-surface-variant uppercase tracking-wider">Secure Protocol</div>
</div>
</div>
</div>
<div class="flex-1">
<img class="w-full h-full object-cover rounded-2xl group-hover:scale-105 transition-transform duration-500" data-alt="A cinematic, low-angle shot of a digital lock interface glowing with amber and deep blue light. Shimmering lines of binary code flow across a translucent screen in the foreground. The atmosphere is intense, sophisticated, and focused on technological security and protection." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyKoGgxDfMSpnHq2kYYNikksLZD46SCPyjBNauR5BP2UaTSz4UDCU6fGsTsj-cw87Vqq8FzJk-VsfUWfX4VECFP9l28FDQhC1A4RXZg80rvTzJ7IKkKr0PHJJr15XbxC1m6HZu5LBDmzLMmC_0_XDtPSq0GLbGp_aS3pEOoDhNtQf6d13rfWfy-tidKTEULe1fs3yU_rDdxO-G6LhnyfEK8s90gE7BxT9kvwC6Al4fHPsfd6vjwZtf4w"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Learning Outcomes -->
<section class="py-xl bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div class="order-2 lg:order-1">
<div class="relative inline-block">
<img class="rounded-[32px] shadow-2xl relative z-10 w-full" data-alt="A group of diverse teenagers in a modern workshop, smiling and collaborating over a robotics project. One student is adjusting a small drone while others look on with excitement. The lighting is natural and warm, coming from large windows in a clean industrial loft space. The vibe is inspirational and teamwork-focused." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIsj2D5i6r9oERcIHDP2Qzr_njOuT32FG9mDJ8qlxGiaTpUkwFnIKlmkKuuudDpR6CLDMhOe2mAr-doc-5tknTm31arG307nIS4GsEa4H8dwi36_-4PWUrl8s8_HjPUz9DyiUgIOaEC3gbd5kvddizy19voXtP8e7QrXbNoH95tt6dEXTFAbRNRZY1-0FFTLFdmf5n7ZIjru_ZoIjTTD8mNTgegYe34zL3kL0i7l4CwkXeRir9vviDhQ"/>
<div class="absolute -top-6 -right-6 glass-panel p-md rounded-2xl z-20 animate-bounce">
<div class="flex items-center gap-3">
<div class="bg-secondary/10 p-2 rounded-full">
<span class="material-symbols-outlined text-secondary" data-icon="stars">stars</span>
</div>
<div>
<p class="font-label-md text-primary leading-none">Certificated</p>
<p class="text-[10px] text-on-surface-variant">Module Completed</p>
</div>
</div>
</div>
</div>
</div>
<div class="space-y-lg order-1 lg:order-2">
<div class="space-y-xs">
<h2 class="font-headline-lg text-headline-lg text-primary">Tangible Learning Outcomes</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Our workshops are designed for impact. Students don't just watch; they achieve.</p>
</div>
<div class="space-y-md">
<div class="flex gap-md">
<div class="flex-shrink-0 w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-primary" data-icon="terminal">terminal</span>
</div>
<div class="space-y-1">
<h4 class="font-headline-md text-body-lg font-semibold text-primary">Technical Proficiency</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Gain fundamental coding, hardware assembly, and networking skills applicable to real-world careers.</p>
</div>
</div>
<div class="flex gap-md">
<div class="flex-shrink-0 w-12 h-12 bg-secondary/5 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-secondary" data-icon="lightbulb">lightbulb</span>
</div>
<div class="space-y-1">
<h4 class="font-headline-md text-body-lg font-semibold text-primary">Critical Thinking</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Learn to analyze complex problems and break them down into solvable technological components.</p>
</div>
</div>
<div class="flex gap-md">
<div class="flex-shrink-0 w-12 h-12 bg-primary/5 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-primary" data-icon="groups">groups</span>
</div>
<div class="space-y-1">
<h4 class="font-headline-md text-body-lg font-semibold text-primary">Collaborative Innovation</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Work in agile squads to tackle design challenges, mirroring the environment of a modern tech startup.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-xl" id="booking">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="bg-primary-container text-on-primary-container rounded-[2.5rem] p-lg lg:p-xl relative overflow-hidden">
<!-- Background texture/shader placeholder -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<div class="absolute inset-0" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 40px 40px;"></div>
</div>
<div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div class="space-y-md">
<h2 class="font-display-lg text-headline-xl lg:text-headline-xl text-on-primary-fixed">Ready to Inspire <br/>Your Students?</h2>
<p class="font-body-lg text-on-primary-container/80 max-w-md">Schedule a VUNCITE workshop at your institution and start the journey into future technology today.</p>
<div class="flex flex-col sm:flex-row gap-md">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-fixed" data-icon="verified">verified</span>
<span class="font-label-md text-on-primary-container">Certified Trainers</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-secondary-fixed" data-icon="school">school</span>
<span class="font-label-md text-on-primary-container">K-12 &amp; University Tracks</span>
</div>
</div>
</div>
<div class="glass-panel p-md lg:p-lg rounded-[2rem] bg-white/10 backdrop-blur-md border-white/20">
<form class="space-y-md">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-md text-on-primary-container ml-1">Contact Name</label>
<input class="w-full bg-white/5 border border-white/10 rounded-xl px-md py-3 text-white placeholder-white/40 focus:ring-secondary focus:border-secondary transition-all" placeholder="John Doe" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-on-primary-container ml-1">Institution</label>
<input class="w-full bg-white/5 border border-white/10 rounded-xl px-md py-3 text-white placeholder-white/40 focus:ring-secondary focus:border-secondary transition-all" placeholder="Example Academy" type="text"/>
</div>
</div>
<div class="space-y-xs">
<label class="font-label-md text-on-primary-container ml-1">Email Address</label>
<input class="w-full bg-white/5 border border-white/10 rounded-xl px-md py-3 text-white placeholder-white/40 focus:ring-secondary focus:border-secondary transition-all" placeholder="john@academy.edu" type="email"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-on-primary-container ml-1">Interested Module</label>
<select class="w-full bg-white/5 border border-white/10 rounded-xl px-md py-3 text-white focus:ring-secondary focus:border-secondary transition-all">
<option class="text-primary">Artificial Intelligence</option>
<option class="text-primary">Robotics</option>
<option class="text-primary">IoT Systems</option>
<option class="text-primary">Cybersecurity</option>
<option class="text-primary">General Overview</option>
</select>
</div>
<button class="w-full bg-secondary-fixed text-on-secondary-fixed font-headline-md text-body-lg font-bold py-4 rounded-xl shadow-lg hover:scale-[1.01] transition-transform active:scale-95" type="submit">Send Inquiry</button>
</form>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full pt-xl pb-md bg-surface-container-lowest border-t border-outline-variant/20">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-8 lg:px-xl max-w-container-max mx-auto">
<div class="col-span-1 md:col-span-1 space-y-md">
<div class="flex items-center gap-2">
<img alt="VUNCITE" class="h-8 w-auto" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHeUAWbvCQyKGqka23RCnfaYQYyquPycnNyaiIF_XuIBxNeGDCbqxnz8DDpHy_2k3iV6imXIS988Gm5NoDIoWAd9HSZtNRGuYktlChNRS0FNbOXM6jEPReZn96IA6sbyhd6e2cOP0JvZ1MNvq3iPqDYpGG2Uwq6SMUhQ86vixTP8iHhiybLoolsOiXm4Z-QUb8F5UcLuvjNr942uUIU_wOKsiN32nnlq6wVdCjioiGMdfFFBKac5cdlqmPSx1qav8SkUw"/>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Accelerating human potential through hands-on technological literacy.</p>
<div class="flex gap-md">
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">public</span></a>
<a class="text-on-surface-variant hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">mail</span></a>
</div>
</div>
<div>
<h5 class="font-headline-md text-body-lg font-bold text-primary mb-md">Quick Links</h5>
<ul class="space-y-base">
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">About</a></li>
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Services</a></li>
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Workshops</a></li>
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Gallery</a></li>
</ul>
</div>
<div>
<h5 class="font-headline-md text-body-lg font-bold text-primary mb-md">Company</h5>
<ul class="space-y-base">
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Blog</a></li>
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Contact</a></li>
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="font-label-md text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a></li>
</ul>
</div>
<div>
<h5 class="font-headline-md text-body-lg font-bold text-primary mb-md">Newsletter</h5>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-md">Stay updated on new workshop modules and tech insights.</p>
<div class="flex gap-2">
<input class="bg-surface-container rounded-lg border-none focus:ring-1 focus:ring-primary w-full text-sm" placeholder="Email" type="email"/>
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg text-sm">Join</button>
</div>
</div>
</div>
<div class="max-w-container-max mx-auto px-8 lg:px-xl mt-xl pt-md border-t border-outline-variant/10 text-center">
<p class="font-label-md text-label-md text-on-surface-variant">© 2024 VUNCITE Technology. All rights reserved.</p>
</div>
</footer>
<script>
        // Micro-interactions and scroll effects
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('opacity-100', 'translate-y-0');
                        entry.target.classList.remove('opacity-0', 'translate-y-8');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('section > div').forEach(el => {
                el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-8');
                observer.observe(el);
            });
        });
    </script>
</body></html>
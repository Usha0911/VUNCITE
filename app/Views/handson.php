<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Hands-on Learning | VUNCITE</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
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
        .vuncite-accent-shadow {
            box-shadow: 0 8px 32px -8px rgba(245, 180, 0, 0.3);
        }
        .hero-pattern {
            background-color: #fbf8fe;
            background-image: radial-gradient(#fdbb1222 1px, transparent 1px);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-lg border-b border-outline-variant/10 shadow-sm">
<div class="flex justify-between items-center h-20 px-8 lg:px-xl max-w-container-max mx-auto">
<div class="flex items-center gap-4">
<span class="font-headline-md text-headline-md font-bold tracking-tight text-primary">VUNCITE</span>
</div>
<div class="hidden md:flex items-center gap-8">
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Home</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">About</a>
<a class="text-primary font-bold border-b-2 border-secondary pb-1 font-label-md text-label-md" href="#">Workshops</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Gallery</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Blog</a>
</div>
<div class="flex items-center gap-4">
<button class="px-6 py-3 rounded-xl border border-outline text-primary font-label-md text-label-md hover:bg-primary/5 transition-all">Contact</button>
<button class="px-6 py-3 rounded-xl bg-primary text-on-primary font-label-md text-label-md hover:opacity-90 active:scale-95 transition-all">Get Started</button>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section -->
<section class="relative overflow-hidden pt-xl pb-lg hero-pattern">
<div class="max-w-container-max mx-auto px-8 lg:px-xl relative z-10 grid lg:grid-cols-2 gap-xl items-center">
<div class="space-y-md">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container/20 text-secondary border border-secondary/20">
<span class="material-symbols-outlined text-[18px]">build</span>
<span class="font-label-md text-label-md uppercase tracking-widest">Hands-On Learning</span>
</div>
<h1 class="font-display-lg text-display-lg text-primary leading-tight">Build the Future with <span class="text-secondary">Your Own Hands</span></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                        At VUNCITE, we believe that true mastery comes from the tactile experience of creation. Our 'Learning by Doing' philosophy bridges the gap between theory and innovation.
                    </p>
<div class="flex flex-wrap gap-4 pt-4">
<a class="px-8 py-4 bg-secondary text-on-secondary rounded-xl font-headline-md text-headline-md flex items-center gap-2 vuncite-accent-shadow hover:scale-[1.02] transition-transform" href="#projects">
                            Explore Projects
                            <span class="material-symbols-outlined">arrow_forward</span>
</a>
<a class="px-8 py-4 border border-outline text-primary rounded-xl font-headline-md text-headline-md hover:bg-surface-container-low transition-colors" href="#kits">
                            View STEM Kits
                        </a>
</div>
</div>
<div class="relative">
<div class="relative z-10 rounded-3xl overflow-hidden glass-card p-4 aspect-square">
<img class="w-full h-full object-cover rounded-2xl shadow-xl" data-alt="A macro shot of a young student assembling a complex robotic arm featuring intricate wiring and yellow 3D printed components. The workshop background is filled with warm, soft bokeh lights. The lighting is crisp and professional, highlighting the mechanical details of the gears and sensors. The overall aesthetic is clean, technological, and inspiring, aligning with a high-end educational brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDIBLu3PmylZuy3LqxQs0-hcPBUU8dvHPSr_TbGZQIXeJ5ylE_eicpUcRxuv3ksRgOyfwHsSqCK-iJd2XWOpslYzPdB4K5jQAdShiS9iYboY7tuFo4q8krvWngu7gtn6TIaNbIdURuRpyrGvtPnaVSCSycfIM17r6e6DNDbDNvWsWZqvAaXivrC7_ge7b1_VxOegwtbTEB2nemmLWVYkPbeJJroZtl2qFx6Shr9orGbyOvvMig7CSg1Q"/>
</div>
<!-- Decorative Elements -->
<div class="absolute -top-8 -right-8 w-32 h-32 bg-secondary/10 rounded-full blur-3xl"></div>
<div class="absolute -bottom-12 -left-12 w-48 h-48 bg-primary/5 rounded-full blur-3xl"></div>
</div>
</div>
</section>
<!-- Philosophy Section: Bento Grid -->
<section class="py-xl bg-surface-container-lowest">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="text-center mb-xl">
<h2 class="font-headline-xl text-headline-xl text-primary mb-4">Our 'Learning by Doing' Philosophy</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                        We move beyond textbooks. Our curriculum is designed to engage the senses, challenge the mind, and spark the creative spirit.
                    </p>
</div>
<div class="grid md:grid-cols-12 gap-gutter">
<div class="md:col-span-8 glass-card rounded-[20px] p-8 flex flex-col justify-between group hover:border-secondary transition-colors">
<div>
<span class="material-symbols-outlined text-secondary text-4xl mb-4">experiment</span>
<h3 class="font-headline-lg text-headline-lg mb-4">Radical Experimentation</h3>
<p class="font-body-md text-body-md text-on-surface-variant">We encourage students to fail forward. Every broken prototype is a lesson learned. Our labs provide a safe space for rigorous testing and rapid iteration, turning ideas into reality.</p>
</div>
<div class="mt-8 flex items-center gap-4">
<div class="flex -space-x-3">
<div class="w-10 h-10 rounded-full border-2 border-surface bg-slate-200 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A portrait of a smiling young male student in a lab coat, representing the diverse community of future innovators at VUNCITE." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_zpNlDLGJ399VBN6XUpl0Eo19u9R0aqDrq4wXe5kco6pHjSPLbGGKAALAo32m0ON_Y4Np60xAx7wc3ZUcq3vBjSWLoYEtpTqgZBmp_PaV0GPbqpc015mlMTw14JXispjqFpqAR2cVYO8IKDFODX4UGAi2Btd0yJR-8U61wslxnsIQc3SUjhbYHaWCy9CTQUYbzuRQTp5tBqQlXCG_6L41rDSR2C9ZL8MZuli0JJmK1h43-8fr3UJXyw"/>
</div>
<div class="w-10 h-10 rounded-full border-2 border-surface bg-slate-200 overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A portrait of a young female student focused on her electronic soldering project, embodying the hands-on learning spirit." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDImDLM0K863mcTTbSSF8VhPcHvQ73KtXHHfY2VuMsy1TA-jBzcGet9T5TDVzdHuywVEt07KUSS0KzOLPcwmDdJ7ETGXB1lcpelmDoIT71MhLzEsYJqlSHxUsNdwguM0YhYzhv38zGrb3mS29cF6t0B8Zq_wvUi6Lkdwv7VV5sK1xvTcuBigyZCoDNbaAARd84OKkE33eXhMWNpZvEtNtLNN-ReGqo-YqXkPvZ_c88gKqpr_2f2xxhKQA"/>
</div>
<div class="w-10 h-10 rounded-full border-2 border-surface bg-surface-container-high flex items-center justify-center text-[10px] font-bold">+24</div>
</div>
<span class="text-sm font-medium text-on-surface-variant">Joined the experimentation lab today</span>
</div>
</div>
<div class="md:col-span-4 bg-primary text-on-primary rounded-[20px] p-8 flex flex-col justify-center relative overflow-hidden">
<div class="relative z-10">
<h3 class="font-headline-lg text-headline-lg mb-4">The Tooling</h3>
<p class="font-body-md text-body-md opacity-80">Access to 3D printers, CNC machines, laser cutters, and advanced soldering stations.</p>
</div>
<div class="absolute -bottom-10 -right-10 opacity-20 transform rotate-12">
<span class="material-symbols-outlined text-[160px]">construction</span>
</div>
</div>
<div class="md:col-span-4 glass-card rounded-[20px] p-8 group hover:border-secondary transition-colors">
<span class="material-symbols-outlined text-secondary text-4xl mb-4">diversity_3</span>
<h3 class="font-headline-md text-headline-md mb-2">Collaborative Projects</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Building solo is great, but building in a team prepares students for real-world engineering environments.</p>
</div>
<div class="md:col-span-8 bg-secondary-container/10 border border-secondary/20 rounded-[20px] p-8 flex flex-col md:flex-row items-center gap-8">
<div class="flex-1">
<h3 class="font-headline-md text-headline-md text-secondary mb-2">Real-World Mentorship</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Students work alongside industry veterans from top tech firms, gaining insights that no classroom can provide.</p>
</div>
<div class="w-48 h-32 rounded-xl overflow-hidden shadow-md">
<img class="w-full h-full object-cover" data-alt="A blurred background showing a professional engineer pointing at a circuit board while explaining it to an attentive student. Bright studio lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCEpU_RpKaCNEvCGuSY9yDPuWDbeUR4SkEr2mgSK1-4UlmDxVRjCG43F-XQ8mDjb0baPaeCBX2pFXfvVwpLFiKUUPxQtRkNPJaO7qwmlVngP_MbLiWrZhZUmNK0sABTQkkhvh00i_In27g-NpbE52FJHw_xrIOaBTE8hK1L9StSW5LLMusevYYVWIf7DGbZ1d9KRpE8j6kR87dUHfe1o5adLW3_e7cXndvMLMX5CRBnWuNvjvlryXudWA"/>
</div>
</div>
</div>
</div>
</section>
<!-- STEM Kits & Projects Section -->
<section class="py-xl" id="kits">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="flex flex-col md:flex-row justify-between items-end gap-6 mb-xl">
<div>
<h2 class="font-headline-xl text-headline-xl text-primary">VUNCITE STEM Kits</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Proprietary project kits designed for deep technical engagement.</p>
</div>
<div class="flex gap-4">
<button class="p-4 rounded-full border border-outline hover:bg-surface-container transition-colors"><span class="material-symbols-outlined">chevron_left</span></button>
<button class="p-4 rounded-full border border-outline bg-primary text-on-primary hover:opacity-90 transition-opacity"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>
<div class="grid md:grid-cols-3 gap-gutter">
<!-- Kit 1 -->
<div class="glass-card rounded-[20px] overflow-hidden group">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A sleek product photograph of the VUNCITE Rover STEM kit on a clean white surface. The kit includes yellow metal chassis components, large rubber tires, and a clear view of the Raspberry Pi microcontroller and wiring. Soft studio lighting with warm yellow accents." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUpbR22_aLBmPbpGhp5hjWIGjB8rfuLaUB1cRDJAWPeJyRpoDb3NFN8c10ZcpRU4UuhPLtY9UB1gv7vBvv-1b-47tvlBQL0dvMQXfA6PfXozqAnNS_h3AKm1PO8crpmkNqo8o1rL5sZP8Q9Uqp4-55v6uYO61HxG2itZF3uXmdLRLJUP3v2oJ3BqYIVCRA5H0pgjUGPEdYMZzYfqKNGe6AXnABXNOSjBInhEPIrC_lsqwJ5hHZpDJWXQ"/>
<div class="absolute top-4 left-4 bg-primary text-on-primary px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Robotics</div>
</div>
<div class="p-8">
<h3 class="font-headline-md text-headline-md mb-2">V-Rover Alpha</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6">A programmable autonomous rover kit with obstacle avoidance and live camera feed capabilities.</p>
<div class="flex items-center justify-between">
<span class="font-headline-md text-headline-md text-secondary">$149.00</span>
<button class="p-3 bg-primary text-on-primary rounded-xl hover:scale-110 transition-transform"><span class="material-symbols-outlined">add_shopping_cart</span></button>
</div>
</div>
</div>
<!-- Kit 2 -->
<div class="glass-card rounded-[20px] overflow-hidden group">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A flat lay photography of an electronics prototyping kit containing various sensors, breadboards, jumper wires in different colors, and an Arduino-compatible board. The components are arranged neatly on a dark gray professional work mat. The lighting is cool and technical." src="https://lh3.googleusercontent.com/aida-public/AB6AXuANMaWVkM1JtXv8Eihgenx7uWQBlWgan2z9MWwuNT61yj4a59GBFsbCJVu-ZYZ3jrAz1Zkv3zIT-TpgC0UwJ1R22n_oQ-XzSdb-G_J09CdtqjpqaaT61XDrCbKu4MPuwGKbUsAOfYarSb-9kUdt3gCgu3rGSlTJjHAWepHQ23hxBuSBDeNtZoifvnUyC3zYXCaAVS7Im8w8mIlpEYqr6vlZjub4j-CVEBpldhFCNT_415sJrMyCg9mwdg"/>
<div class="absolute top-4 left-4 bg-secondary text-on-secondary px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Electronics</div>
</div>
<div class="p-8">
<h3 class="font-headline-md text-headline-md mb-2">Circuit Explorer Pro</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Master the fundamentals of analog and digital electronics with 50+ guided experiments and projects.</p>
<div class="flex items-center justify-between">
<span class="font-headline-md text-headline-md text-secondary">$89.00</span>
<button class="p-3 bg-primary text-on-primary rounded-xl hover:scale-110 transition-transform"><span class="material-symbols-outlined">add_shopping_cart</span></button>
</div>
</div>
</div>
<!-- Kit 3 -->
<div class="glass-card rounded-[20px] overflow-hidden group">
<div class="h-64 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A professional studio photo of a custom-built 3D printer kit designed by VUNCITE. The printer features a minimalist black frame with yellow motor mounts and a large touch screen interface. A small blue plastic vase is currently being printed on the build plate." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDY_SqJNf-F6iKLQYbrGs3BzJQ8y0oaNaSaWtj8N0v2kYLaBDchX6LCANC6-uTlrijaEQw7KvzsmvlMThQrlxVrSsJ4D1hM10EbbrpwHgc7KqAGozceoIpcNjY-NWkjWgQLpNtVHv_vhqydaIka2Lf6HBi7RurwQLkUdfLlPsIMMWWQFbe_4tnfhUriCzNQhZk9D28belXbi1EZYx2cpdDNDTPBFBWqnGsYMvg5XcBGJSCasgDTCDIWYw"/>
<div class="absolute top-4 left-4 bg-outline text-on-surface px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Manufacturing</div>
</div>
<div class="p-8">
<h3 class="font-headline-md text-headline-md mb-2">Build-a-Printer Mini</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Learn the mechanics of 3D printing by building your own high-precision desktop printer from scratch.</p>
<div class="flex items-center justify-between">
<span class="font-headline-md text-headline-md text-secondary">$299.00</span>
<button class="p-3 bg-primary text-on-primary rounded-xl hover:scale-110 transition-transform"><span class="material-symbols-outlined">add_shopping_cart</span></button>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Student Prototype Gallery -->
<section class="py-xl bg-surface-container-low" id="gallery">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="flex flex-col md:flex-row items-center justify-between mb-xl">
<h2 class="font-headline-xl text-headline-xl text-primary text-center md:text-left">Student Prototype Gallery</h2>
<p class="font-label-md text-label-md text-secondary border-b border-secondary pb-1 cursor-pointer hover:opacity-70 transition-opacity">VIEW ALL 150+ PROJECTS</p>
</div>
<div class="columns-1 md:columns-2 lg:columns-3 gap-gutter space-y-gutter">
<div class="break-inside-avoid glass-card rounded-2xl overflow-hidden relative group">
<img class="w-full h-auto" data-alt="A close-up of a student-built smart hydration station that uses an ultrasonic sensor to detect bottles and dispense water. The device is built from laser-cut acrylic and translucent yellow plastic. Soft ambient workshop lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAU39nrCXJB42CaZgqtp5SjjE6guQ7VtBzdtOSj9oZQNXstU1sARVJx2z0MOXfxZ4fTL1QYV435jVAvotKM8hvxU0eG3PV9SGVwcN-NE8OBSuhXzR3jWzwHXVPgCKRyUw9e25CRe5qiGcDFu2T63DKM2bwt9YO3uYjmEOIYNNFoWArZJuUD323_oSclMdaKrKamVPwWvbKUCGUFKmZEiJ_Gd-HA1F2uhnVuJo0PzlwdvyvP_WmswyWD3w"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
<h4 class="text-on-primary font-headline-md text-headline-md">Eco-Hydrate Station</h4>
<p class="text-on-primary/70 text-body-sm">By Alex Chen, Grade 11</p>
</div>
</div>
<div class="break-inside-avoid glass-card rounded-2xl overflow-hidden relative group">
<img class="w-full h-auto" data-alt="A wide shot of a drone prototype featuring custom-designed 3D printed wings. The drone is sitting on a tech workshop table surrounded by tools and laptops. High-tech, clean look with a blue and yellow color scheme." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCkinQajB6YS1o-yxDX-mrqNIwK7RWmBlWWY0Wvxetas8izZRE5TV733K14QzoJSgjT0rGhutThKt5T_JPQapJz__NY61P91oNwOjVPWTLyZ3zAWQpKQtmKyj94h3AEks52eae54QocTTE8xyO9zfomGgJeifyhXAFoKQs68bjSwRxqsm_XXZ_EcW8JnkZ4_Ln2l1wuRdzFRnEB5r6iew3rNYTIsNVClseBTOiAXnYCJ6i5lZbJGiSIgw"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
<h4 class="text-on-primary font-headline-md text-headline-md">Wing-Drone v2</h4>
<p class="text-on-primary/70 text-body-sm">By Sarah Miller, Grade 9</p>
</div>
</div>
<div class="break-inside-avoid glass-card rounded-2xl overflow-hidden relative group">
<img class="w-full h-auto" data-alt="A detailed view of a wearable haptic feedback glove for VR applications. The glove has thin copper wires running across the fingers and small vibrating motors at the joints. Photographed on a minimalist gray background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZJsttz8bn7iFP9g0uON6DIxLkZZaHhd54Yv6XToKLLMPEzKBcY76NVG4eErg6mso2GqPiuIpi3zZ6b5l6ehIqwzEr7NMF8ZJnNskYh7I7H0LLsP0f4OAdDTSh503xGbqPeQTyLrh_TFczHvej4njFNlOmqAwuN-6WUe0OyPOHYlWtDyhnFquAhpVXlnxsdpfC3Iacs0C03BiUiFjyScsFwHQc_0irwdNCQoSFUYQzmTOO8qMj5LTi9g"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
<h4 class="text-on-primary font-headline-md text-headline-md">Haptic-VR Interface</h4>
<p class="text-on-primary/70 text-body-sm">By Jordan Lee, Grade 12</p>
</div>
</div>
<div class="break-inside-avoid glass-card rounded-2xl overflow-hidden relative group">
<img class="w-full h-auto" data-alt="An innovative automated plant care system using soil moisture sensors and a decorative water pump. The plant is housed in a modern geometric planter designed by the student. Vibrant green foliage against a white wall." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7n7zq5XjecwDq_sM4wg382Z8CPLlJkfC0JFmmE_42NePXjJn6hK4X-BkLx8oL_Tpa86inkDsWWrD33fNsWwHFJ1s9PaRsKvtz4vNU6g_lct3JwM9sm32rmupP6-0ctthViiVWz0u_D74wf_QSc4hrToDLqLnalbBSPpPACIjzZWVaWeVO-WhUFbIcgKSanZ1iQuOxgHTTrMHhA8yHS7a9pjElvySrOJqBAg0kKQ_gm4NfVB92tlf88g"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
<h4 class="text-on-primary font-headline-md text-headline-md">SmartGrow Box</h4>
<p class="text-on-primary/70 text-body-sm">By Maria Gomez, Grade 10</p>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-xl">
<div class="max-w-container-max mx-auto px-8 lg:px-xl">
<div class="relative bg-primary rounded-[32px] p-xl overflow-hidden text-center">

<div class="relative z-10 space-y-md">
<h2 class="font-display-lg text-display-lg text-on-primary">Ready to start your first project?</h2>
<p class="font-body-lg text-body-lg text-on-primary/70 max-w-2xl mx-auto">
                            Join VUNCITE's workshop series and transform your theoretical knowledge into tangible innovation. Limited seats available for our summer cohort.
                        </p>
<div class="flex flex-wrap justify-center gap-4 pt-6">
<button class="px-8 py-4 bg-secondary text-on-secondary rounded-xl font-headline-md text-headline-md vuncite-accent-shadow hover:scale-105 transition-transform">Enroll Now</button>
<button class="px-8 py-4 bg-surface/10 border border-surface/20 text-on-primary rounded-xl font-headline-md text-headline-md backdrop-blur-md hover:bg-surface/20 transition-all">Schedule a Tour</button>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest border-t border-outline-variant/20 w-full pt-xl pb-md">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-8 lg:px-xl max-w-container-max mx-auto">
<div class="space-y-4">
<div class="font-headline-md text-headline-md font-bold text-primary">VUNCITE</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Empowering the next generation of engineers and designers through immersive hands-on experiences.</p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full border border-outline flex items-center justify-center text-on-surface-variant hover:text-secondary hover:border-secondary transition-all" href="#"><span class="material-symbols-outlined text-[20px]">public</span></a>
<a class="w-10 h-10 rounded-full border border-outline flex items-center justify-center text-on-surface-variant hover:text-secondary hover:border-secondary transition-all" href="#"><span class="material-symbols-outlined text-[20px]">share</span></a>
</div>
</div>
<div>
<h4 class="font-label-md text-label-md text-primary uppercase mb-6">Quick Links</h4>
<ul class="space-y-3">
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">About</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Services</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Workshops</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Gallery</a></li>
</ul>
</div>
<div>
<h4 class="font-label-md text-label-md text-primary uppercase mb-6">Resources</h4>
<ul class="space-y-3">
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Blog</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a></li>
<li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Support</a></li>
</ul>
</div>
<div>
<h4 class="font-label-md text-label-md text-primary uppercase mb-6">Newsletter</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-4">Stay updated on new kits and workshops.</p>
<form class="flex flex-col gap-2">
<input class="bg-surface-container-low border-outline-variant rounded-xl px-4 py-3 focus:border-secondary focus:ring-secondary transition-all" placeholder="Your email" type="email"/>
<button class="bg-primary text-on-primary rounded-xl px-4 py-3 font-label-md text-label-md hover:opacity-90 transition-opacity">Subscribe</button>
</form>
</div>
</div>
<div class="max-w-container-max mx-auto px-8 lg:px-xl mt-xl pt-8 border-t border-outline-variant/10 text-center">
<p class="font-body-sm text-body-sm text-on-surface-variant opacity-60">© 2024 VUNCITE Technology. All rights reserved.</p>
</div>
</footer>
<script>
        // Smooth hover micro-interaction for cards
        document.querySelectorAll('.glass-card').forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                card.style.setProperty('--mouse-x', `${x}px`);
                card.style.setProperty('--mouse-y', `${y}px`);
            });
        });

        // Simple scroll observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-8');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('section > div').forEach(el => {
            el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
            observer.observe(el);
        });
    </script>
</body></html>
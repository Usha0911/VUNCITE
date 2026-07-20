<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Story-Based Learning | VUNCITE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&family=Inter:wght@400;500;600&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet" />
    <style>
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(9, 20, 77, 0.08);
        box-shadow: 0 4px 24px rgba(5, 12, 52, 0.04);
    }

    .glass-nav {
        background: rgba(251, 248, 254, 0.8);
        backdrop-filter: blur(16px);
    }

    .bento-grid {
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        gap: 24px;
    }

    .hero-gradient {
        background: radial-gradient(circle at top right, rgba(253, 187, 18, 0.1), transparent),
            radial-gradient(circle at bottom left, rgba(123, 89, 0, 0.05), transparent);
    }
    </style>
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
                    "headline-xl": ["40px", {
                        "lineHeight": "1.2",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "1.5",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "1.4",
                        "fontWeight": "500"
                    }],
                    "display-lg": ["64px", {
                        "lineHeight": "1.1",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "600"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "1.3",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "1.6",
                        "fontWeight": "400"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "1.6",
                        "fontWeight": "400"
                    }],
                    "display-lg-mobile": ["40px", {
                        "lineHeight": "1.2",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "600"
                    }],
                    "label-md": ["12px", {
                        "lineHeight": "1.2",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }]
                }
            },
        },
    }
    </script>
</head>

<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
    <!-- TopNavBar -->
     <?= $this->include('layout/header'); ?>
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative min-h-[80vh] flex items-center py-xl px-8 lg:px-xl hero-gradient overflow-hidden">
            <div class="max-w-container-max mx-auto grid lg:grid-cols-2 gap-md items-center">
                <div class="z-10">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md mb-md">
                        REIMAGINING EDUCATION
                    </span>
                    <h1
                        class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-sm leading-tight">
                        Where Technology Meets <span class="text-secondary">Epic Tales.</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-lg">
                        At VUNCITE, we don't just teach code or circuits. We weave complex technology into immersive
                        narratives, transforming every lesson into a quest for innovation.
                    </p>
                    <div class="flex flex-wrap gap-md">
                        <button
                            class="px-8 py-4 bg-primary text-on-primary rounded-xl font-label-md text-label-md shadow-xl hover:shadow-2xl transition-all">Explore
                            Journeys</button>
                        <button
                            class="px-8 py-4 bg-surface-container-high text-on-surface rounded-xl font-label-md text-label-md flex items-center gap-2 hover:bg-surface-container-highest transition-all">
                            <span class="material-symbols-outlined">play_circle</span>
                            Watch the Magic
                        </button>
                    </div>
                </div>
                <div class="relative mt-lg lg:mt-0">
                    <div
                        class="aspect-square rounded-[40px] overflow-hidden glass-card p-4 rotate-3 hover:rotate-0 transition-transform duration-700">
                        <img class="w-full h-full object-cover rounded-[32px]"
                            data-alt="A group of diverse, enthusiastic young students in a modern, sunlit workshop environment. They are gathered around a glowing holographic interface, their faces lit with wonder and engagement. The aesthetic is clean, high-tech, and luxurious, with soft ambient lighting and a shallow depth of field."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAm0YVHLFfvNfeAwQKCREiwJbhi6q-ipLHHMqZjCooNiv8FF34fFNfzcHck42pynDcNZWMrP20fXx0Tgw0R7uemuqJXv0eXjYCIiXZXmLxcqMmM8H0qqmPm2Th8IxDTfT9UUAtdTuOxaVYjAVw0FYEYoAEpc4kEI645hiJwrScC8JAdZoSDuZYnv-lUXACUlCVQh9XzITvP2Vgp4N7RJb_WkWm4gUDW3AOllt1GWT65H14oOIQgsYmNVw" />
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-secondary-fixed-dim/20 rounded-full blur-3xl">
                    </div>
                    <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-primary-fixed/20 rounded-full blur-3xl"></div>
                </div>
            </div>
        </section>
        <!-- Why Stories? Section -->
        <section class="py-xl px-8 lg:px-xl bg-surface-container-lowest">
            <div class="max-w-container-max mx-auto">
                <div class="text-center mb-xl">
                    <h2 class="font-headline-lg text-headline-lg text-primary mb-sm">Why Stories?</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                        Narratives create a cognitive hook. By placing learners in real-world scenarios, abstract
                        concepts become tangible tools for problem-solving.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-md">
                    <!-- Card 1 -->
                    <div class="glass-card p-md rounded-2xl hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 rounded-xl bg-primary-fixed flex items-center justify-center text-primary mb-md">
                            <span class="material-symbols-outlined text-4xl">psychology</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-sm">Deep Retention</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Memory is associative. By linking logic to lore, students retain technical information up to
                            40% longer than traditional rote learning.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div class="glass-card p-md rounded-2xl hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 rounded-xl bg-secondary-fixed flex items-center justify-center text-secondary mb-md">
                            <span class="material-symbols-outlined text-4xl">hub</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-sm">Contextual Coding</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Instead of "Hello World", learners build flight systems for orbital missions or AI guardians
                            for digital forests.
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div class="glass-card p-md rounded-2xl hover:-translate-y-2 transition-transform duration-300">
                        <div
                            class="w-16 h-16 rounded-xl bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed-variant mb-md">
                            <span class="material-symbols-outlined text-4xl">groups</span>
                        </div>
                        <h3 class="font-headline-md text-headline-md mb-sm">Collaborative Play</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Stories require teams. Our pedagogy fosters soft skills—leadership, empathy, and
                            communication—alongside technical mastery.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sample Learning Journeys (Bento Grid) -->
        <section class="py-xl px-8 lg:px-xl bg-surface">
            <div class="max-w-container-max mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-end mb-xl gap-md">
                    <div class="max-w-xl">
                        <h2 class="font-headline-lg text-headline-lg text-primary mb-sm">Sample Learning Journeys</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Each workshop is an odyssey. Choose your path and master the tools of the future through
                            high-stakes narrative play.
                        </p>
                    </div>
                    <a class="text-primary font-label-md text-label-md flex items-center gap-2 group" href="#">
                        View All Workshops
                        <span
                            class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
                <div class="bento-grid">
                    <!-- Main Feature -->
                    <div
                        class="col-span-12 lg:col-span-8 h-[450px] relative rounded-[32px] overflow-hidden group cursor-pointer">
                        <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            data-alt="A cinematic, high-quality image showing a futuristic smart city model built with LEGO and electronics. Soft neon blue and amber lights glow from the tiny buildings. Students' hands are visible in the foreground, adjusting a miniature wind turbine. The atmosphere is focused and magical, suggesting the intersection of play and engineering."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDD2DB3nfI-OXQWYmVEdqzc0sWc0BZ3-knOhtd1VdUM8eAh2vgsk2Zu5SStN2HjDMgrN6823Gzp-oSly1CPkdcO98iUNyz-DyebCjR1jg9AvOgMDpZAb_qsg5f5er-Iprow8dZrj7R8TLRNLEAVROh6cVmDeMPXTajWRB3jCVnErnVFSwKweQ7ypJ3QVJmCuLntnOJzAycyoom9FYNmlNjumLlabgvKlxwnuEFohhETF3W-NyxzLmPXyA" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-lg w-full">
                            <div class="flex items-center gap-2 mb-sm">
                                <span
                                    class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full text-label-md font-label-md">MISSION:
                                    MARS RESCUE</span>
                                <span class="text-white/60 text-label-md font-label-md">• 12 WEEKS</span>
                            </div>
                            <h3 class="text-white font-headline-lg text-headline-lg mb-sm">The Martian Survival Protocol
                            </h3>
                            <p class="text-white/80 font-body-md text-body-md max-w-xl">
                                Learn IoT and Python by building life-support monitoring systems for a stranded
                                astronaut. A race against time and tech.
                            </p>
                        </div>
                    </div>
                    <!-- Secondary Feature 1 -->
                    <div
                        class="col-span-12 md:col-span-6 lg:col-span-4 h-[450px] relative rounded-[32px] overflow-hidden group cursor-pointer">
                        <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            data-alt="Close up of a stylized, glowing circuit board that looks like an ancient mystical artifact. Golden etchings on a deep blue substrate. The image is clean and elegant, evoking a sense of digital magic and technical sophistication. Soft bokeh background of a high-end learning studio."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaPuewiD4XK14awcBPp1EnzGoxsi-S8vSSOyy2k-zxTVnmm7PqJpo9dh_-pJihrF6ocpjUKOryt9M27qOGLmCwVKaL76TPeN8dvDd6IlhiFXvcHzLS7h6vV670wJPWv_HOzzJBJgecK2MFmlK5bO7J_hwV-BtOTgNIbO-ipiLYUMfsZFzgXXKdenagQWvejQF7XPLXlPCIZsD3ZcapJ4yKyXQAK1-fOScDwBluA8Sc_BEWN4n8w30UMA" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-lg">
                            <div class="flex items-center gap-2 mb-sm">
                                <span
                                    class="px-3 py-1 bg-primary-fixed-dim text-on-primary-fixed rounded-full text-label-md font-label-md">WEB
                                    QUEST</span>
                            </div>
                            <h3 class="text-white font-headline-md text-headline-md mb-sm">The Digital Archive</h3>
                            <p class="text-white/80 font-body-sm text-body-sm">
                                Recover lost data by mastering Database management and Frontend security in a cyberpunk
                                heist scenario.
                            </p>
                        </div>
                    </div>
                    <!-- Secondary Feature 2 -->
                    <div
                        class="col-span-12 md:col-span-6 lg:col-span-4 h-[350px] relative rounded-[32px] overflow-hidden group cursor-pointer">
                        <img class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            data-alt="A young student wearing sleek, modern VR goggles, reaching out to touch a floating holographic geometric object. The setting is a minimalist, airy classroom with large windows. The lighting is natural and bright, conveying a sense of optimism and high-end technological accessibility."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBGzs5Zzotu1jTpjM_VkP_xn3v8I0O0fNeX7LRzMvFIYR8zyWcJHFcyRzkYmMQNDphpU0I8eT_s_hLBb_uWxnRMX7jw2W6FX9VWWCh1Pfhc5ME3UIipcjov_b5fDxcp9pY4eFs8O6UskVbuZc94-7iYAvVe_wEGEbE_uxTgE7_MBd2Ukz41fkY8I1H4XOa5Qd8RXeHdP6macrIaTghDQjBn7h_qKsRU-mqVa6YkFqjmQnM6kg_6XV4fdg" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-md">
                            <h3 class="text-white font-headline-md text-headline-md mb-xs">Metaverse Architects</h3>
                            <p class="text-white/80 font-body-sm text-body-sm">
                                Building worlds with Unity and C#.
                            </p>
                        </div>
                    </div>
                    <!-- Secondary Feature 3 -->
                    <div
                        class="col-span-12 lg:col-span-8 h-[350px] bg-primary-container rounded-[32px] p-lg flex flex-col justify-center relative overflow-hidden group">
                        <div
                            class="absolute right-0 top-0 w-1/2 h-full opacity-20 group-hover:opacity-30 transition-opacity">
                            <span class="material-symbols-outlined text-[300px] text-white">bolt</span>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-on-primary-container font-display-lg text-headline-xl mb-sm">Ready to lead?
                            </h3>
                            <p class="text-on-primary-container/80 font-body-lg text-body-lg max-w-md mb-md">
                                Every journey begins with a single line of code. Join a cohort and write your own story
                                of innovation.
                            </p>
                            <button
                                class="bg-secondary-container text-on-secondary-container px-8 py-4 rounded-xl font-label-md text-label-md hover:scale-105 transition-transform">Apply
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience the Magic CTA -->
        <section class="py-xl px-8 lg:px-xl relative overflow-hidden">
            <div class="max-w-container-max mx-auto glass-card rounded-[40px] p-lg md:p-xl text-center relative z-10">
                <div class="max-w-3xl mx-auto">
                    <h2 class="font-display-lg text-display-lg-mobile md:text-headline-xl text-primary mb-md">Experience
                        the Magic</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-xl">
                        Schedule a live demonstration or join an open workshop to see how story-based learning
                        transforms technical education into an unforgettable adventure.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-md justify-center">
                        <button
                            class="px-10 py-5 bg-primary text-on-primary rounded-2xl font-label-md text-label-md shadow-2xl hover:bg-on-surface-variant transition-all">Book
                            a Trial Workshop</button>
                        <button
                            class="px-10 py-5 border-2 border-outline text-on-surface rounded-2xl font-label-md text-label-md hover:bg-surface-container transition-all">Download
                            Brochure</button>
                    </div>
                </div>
            </div>
            <!-- Atmospheric backgrounds -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-primary-fixed/30 rounded-full blur-[120px] -z-0">
            </div>
        </section>
    </main>
    <!-- Footer -->
  <?= $this->include('layout/footer'); ?>
    <script>
    // Micro-interaction for glass cards
    document.querySelectorAll('.glass-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    // Simple scroll animation trigger
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.bento-grid > div, .glass-card').forEach(el => {
        el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10');
        observer.observe(el);
    });
    </script>
</body>

</html>
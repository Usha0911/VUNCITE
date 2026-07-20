<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>VUNCITE | Youth Mentoring &amp; Leadership</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Outfit:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        body {
            background-color: #FAFBFF;
            color: #1B1B1F;
            -webkit-font-smoothing: antialiased;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(9, 20, 77, 0.08);
            box-shadow: 0 4px 24px rgba(5, 12, 52, 0.04);
        }
        .glass-card {
            background: #FFFFFF;
            border: 1px solid rgba(9, 20, 77, 0.08);
            box-shadow: 0 4px 24px rgba(5, 12, 52, 0.04);
            transition: all 0.2s ease-out;
        }
        .glass-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 48px rgba(5, 12, 52, 0.08);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .road-line {
            background: linear-gradient(to bottom, #09144D 50%, transparent 50%);
            background-size: 1px 20px;
        }
    </style>
</head>
<body class="font-body-md overflow-x-hidden">
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface-dim/80 backdrop-blur-lg border-b border-outline-variant/10 shadow-sm">
<div class="flex justify-between items-center h-20 px-8 lg:px-xl max-w-container-max mx-auto">
<div class="flex items-center gap-2">
<img alt="VUNCITE Logo" class="h-10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpFQpKjzCjgDJUfr3rp0W9aB98VqVphYA9KH6xjWzxgQ0s7uCrcpK9VKfVXRSQL2VVgvM0XW1a_n7m52d2na3cAUjzMWTTzTGgb57qyPdh5EJa4ajhnhH9yIYDlzLJ66cmUb2eJyVcf2eglyA3Z43T4kciBUatGXFj_KXSfa5HUkYQ78q1UAc5C_t3JhXdr9tRdJ0WyykQ3J5szx3Oh9nq5q7gMe4PJfQTIMgLQbashhXocf-ZnN2G2c_ku2zPYuJMaUI"/>
</div>
<div class="hidden md:flex items-center gap-gutter">
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Home</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">About</a>
<a class="text-primary font-bold border-b-2 border-primary pb-1 font-label-md text-label-md" href="#">Workshops</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Gallery</a>
<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md text-label-md" href="#">Blog</a>
</div>
<div class="flex items-center gap-sm">
<button class="hidden lg:block text-on-surface hover:bg-primary/5 transition-all px-4 py-2 rounded-xl font-label-md text-label-md">Contact</button>
<button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-label-md text-label-md font-bold transition-transform active:scale-95 shadow-lg shadow-primary/10">Get Started</button>
</div>
</div>
</nav>
<main class="pt-20">
<!-- Hero Section: Innovation Mindset -->
<section class="relative overflow-hidden pt-xl pb-24 px-8 lg:px-xl">
<!-- Atmospheric background element -->
<div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-secondary-container/20 rounded-full blur-[120px]"></div>
<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-xl items-center relative z-10">
<div class="space-y-md">
<span class="inline-flex items-center gap-2 px-4 py-1 bg-secondary-container/30 text-secondary font-label-md text-label-md rounded-full">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">bolt</span>
                        YOUTH LEADERSHIP PROGRAM
                    </span>
<h1 class="font-display-lg text-display-lg-mobile lg:text-display-lg text-primary leading-tight">
                        Cultivate an <span class="text-secondary italic">Innovation</span> Mindset.
                    </h1>
<p class="text-on-surface-variant font-body-lg text-body-lg max-w-xl">
                        VUNCITE mentors are pioneers in technology and business, dedicated to shaping the next generation of strategic thinkers and world-class leaders.
                    </p>
<div class="flex flex-wrap gap-sm pt-4">
<button class="bg-primary text-on-primary px-8 py-4 rounded-xl font-headline-md text-body-md font-bold shadow-xl shadow-primary/20 flex items-center gap-2 group">
                            Join the Program
                            <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
<button class="glass-panel px-8 py-4 rounded-xl font-headline-md text-body-md font-bold text-primary flex items-center gap-2">
                            Explore Curriculum
                        </button>
</div>
</div>
<div class="relative">
<div class="relative aspect-square rounded-[40px] overflow-hidden glass-panel p-2">
<img class="w-full h-full object-cover rounded-[32px]" data-alt="A cinematic, high-end photograph of a diverse group of focused young adults engaged in a high-tech workshop. The lighting is sophisticated, with soft blue and warm gold accents reflecting off glass surfaces and modern equipment. The setting is a bright, minimalist architectural space that feels aspirational and premium. The mood is one of intense collaboration and forward-thinking innovation." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDV01TE6tJSyFKth4o-f-ffGOwU2PRGHj4Fl_WIZxUXzd32K3De7ya-a2nEFXwZ6ZWzK7pIH9IeVcMoZXNA99roquBqjbwk64fyOmyTQcyaB566BWHDs6A7G474MyPH0Rkodaz7qVIE5ONLQxh9R8PewVapTqWq4eysOi2LfekBd8k9Afb96aQzq-7UgLDzsFmPKW7wuL1euWaYjmvCDQ534VsU3K7pEKTkGDQ2fVe8euTUQSBr5-mF-g"/>
</div>
<!-- Floating Stat Cards -->
<div class="absolute -bottom-8 -left-8 glass-panel p-6 rounded-2xl shadow-xl space-y-2 animate-bounce-slow">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center">
<span class="material-symbols-outlined text-secondary">trending_up</span>
</div>
<div>
<p class="font-label-md text-label-md text-on-surface-variant uppercase">Mentee Success</p>
<p class="font-headline-md text-headline-md text-primary">94% Growth</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Mentorship Roadmap -->
<section class="bg-surface-container-lowest py-xl px-8 lg:px-xl">
<div class="max-w-container-max mx-auto">
<div class="text-center max-w-2xl mx-auto mb-16">
<h2 class="font-headline-xl text-headline-xl text-primary mb-4">Your Path to Excellence</h2>
<p class="text-on-surface-variant font-body-md">A structured methodology designed to transform raw potential into industry-defining leadership.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter relative">
<!-- Roadmap Item 1 -->
<div class="glass-card p-8 rounded-2xl relative">
<div class="w-14 h-14 bg-primary text-on-primary rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-3xl">lightbulb</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">01. Ideation Phase</h3>
<p class="text-on-surface-variant text-body-md">Master the art of divergent thinking. Learn to identify high-impact problems and conceptualize scalable solutions.</p>
</div>
<!-- Roadmap Item 2 -->
<div class="glass-card p-8 rounded-2xl relative">
<div class="w-14 h-14 bg-secondary-container text-secondary rounded-xl flex items-center justify-center mb-6 shadow-lg shadow-secondary/10">
<span class="material-symbols-outlined text-3xl">architecture</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">02. Strategic Build</h3>
<p class="text-on-surface-variant text-body-md">From theory to execution. Develop the technical and leadership framework required to bring vision to life.</p>
</div>
<!-- Roadmap Item 3 -->
<div class="glass-card p-8 rounded-2xl relative">
<div class="w-14 h-14 bg-primary-container text-on-primary-container rounded-xl flex items-center justify-center mb-6 shadow-lg">
<span class="material-symbols-outlined text-3xl">rocket_launch</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-3">03. Scale &amp; Lead</h3>
<p class="text-on-surface-variant text-body-md">Refine your leadership presence. Prepare for market entry and long-term organizational influence.</p>
</div>
</div>
</div>
</section>
<!-- Mentor Profiles -->
<section class="py-xl px-8 lg:px-xl overflow-hidden">
<div class="max-w-container-max mx-auto">
<div class="flex flex-col md:flex-row justify-between items-end gap-md mb-12">
<div class="max-w-xl">
<h2 class="font-headline-xl text-headline-xl text-primary mb-4">World-Class Mentors</h2>
<p class="text-on-surface-variant font-body-md">Learn from architects of modern industry who are committed to your trajectory.</p>
</div>
<button class="text-primary font-bold flex items-center gap-2 hover:translate-x-2 transition-transform">
                        View All Mentors <span class="material-symbols-outlined">chevron_right</span>
</button>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Mentor 1 -->
<div class="group">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-sm border border-outline-variant/10">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A professional, high-end portrait of a female tech executive in a modern, light-filled office. She has a confident yet approachable expression. The lighting is bright and airy, reflecting a luxury professional brand aesthetic with soft shadows and high-key whites. Her attire is sophisticated business casual, fitting a premium innovation consultancy theme." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB07vM0Qp7L4LwJtqXi76GbP3NrVlVvEIf-z8VX8jon5d0zZv9_-YKG-d-sV6rnQNPJXHrixPeDqnyvES2l_PnUQBH4NPD_KOKfp3gEOnGj10LzySAEOIS8Qh9QCAN5BUxC5EXvwvyj5KcVjQ7yHym5rheHogz7jb1oa7_2DLxnSOoKzYiMGyKW_OvjR_t9xcGIhB_kMkpcAvGeQQWU4oYLvpL8F01j6CX_QAnyGeajZZ4DPCKnfBvxVQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<h4 class="font-headline-md text-headline-md text-primary">Dr. Elena Thorne</h4>
<p class="text-secondary font-label-md text-label-md uppercase tracking-wider">AI Ethics &amp; Strategy</p>
</div>
<!-- Mentor 2 -->
<div class="group">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-sm border border-outline-variant/10">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A sharp, premium portrait of a male entrepreneur with a clean, modern aesthetic. The setting is a minimalist architectural space with floor-to-ceiling windows showing a hint of a clean city skyline. The lighting is crisp and professional, using cool tones and clean highlights. He is looking directly at the camera with a calm, strategic gaze." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_DgPPyldmEjmxMqwxNQDHeV5Ww3Pmy2Q8ZllPtUn4kBp33QA3dN4S1g83l8bfq1wwicZrmb8FwXo5C7-AG3RNm6dCCV8kq3U9XaKndw5rqU_yK_jwT9Ak_yDNiVBcVjKsASwmlniGU5mqMrrPmYrNxapu3NuD7LihAzKgBT6ZuPln-iXo_yy_Ox1VmCMZlc51iaSvl_Jnh02ukxd23f43e4tEyUlxr0VKgKVGK-ySvRun41ab2Rs7rw"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<h4 class="font-headline-md text-headline-md text-primary">Marcus Sterling</h4>
<p class="text-secondary font-label-md text-label-md uppercase tracking-wider">Venture Operations</p>
</div>
<!-- Mentor 3 -->
<div class="group">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-sm border border-outline-variant/10">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A beautiful, professional headshot of a young female designer in a creative, minimalist studio. The lighting is warm and golden, emphasizing a premium light-mode feeling. She radiates intelligence and creativity. The background is softly blurred, showing clean geometric forms and subtle design elements." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBFQRhSUE0jLzgSMtmCngw7xiviJcnE3y9ik-R7h6GajQQgoa5SPj9q0SfozdYz4MPXOER139UL3y9_QuaH965CyyVHwZAEds5feWb-sLQ18jqt77jCgzU_owTo_uF-q8Re3Pss6rXDGyaJC-QKVQvLq00O3PLqul2Pz2hERCqLqPRwgkHK9z68sIJEqveo4opdQPu_DL2zf-PfhwG84tIMFnCZvYwuIHAJGB9AvqwwUynb6PyP8BGzoA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<h4 class="font-headline-md text-headline-md text-primary">Sienna Wu</h4>
<p class="text-secondary font-label-md text-label-md uppercase tracking-wider">Product Design</p>
</div>
<!-- Mentor 4 -->
<div class="group">
<div class="relative aspect-[3/4] rounded-2xl overflow-hidden mb-4 shadow-sm border border-outline-variant/10">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A powerful, executive-style portrait of a senior male leader in a high-end, contemporary workspace. The color palette is dominated by whites, light greys, and deep navy accents. The lighting is dramatic but soft, highlighting professional experience and authority. The aesthetic is clean, luxurious, and technologically focused." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuE5yqxErqQjLPbR4dSwuwbNFzmyGKemfvEXboQAIv7U7Pyru4qOnRSoHTRp00A4Z1QWgqF9phCRJtIc1HhCI3LAy4XtBwB1PNbxwEEh-FlQQJZ1J5CLktf1Cj9F15-jQXvCKgJ_FYixz2S7qBdGw-ynkTYda1FgJFPPFaW9l2_DEGZGgSx9uWsHev4eFwFykeUX5RgGdfKitoex6fGExj0k7WCJSHNmqs-xXo0CBFIeLnVg5NB9ItuQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
</div>
<h4 class="font-headline-md text-headline-md text-primary">Jonathan Hayes</h4>
<p class="text-secondary font-label-md text-label-md uppercase tracking-wider">Global Leadership</p>
</div>
</div>
</div>
</section>
<!-- Success Stories (Bento Layout) -->
<section class="bg-surface-container-low py-xl px-8 lg:px-xl">
<div class="max-w-container-max mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-xl text-headline-xl text-primary mb-4">Innovation in Action</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 grid-rows-2 gap-gutter h-full md:h-[600px]">
<!-- Feature Story -->
<div class="md:col-span-7 md:row-span-2 glass-card rounded-3xl overflow-hidden relative group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="An inspiring wide-shot of a young tech founder presenting on a sleek, modern stage. The environment is dark with vibrant cyan and white stage lighting. The audience is blurred in the foreground, focusing on the speaker's passion and the glowing 'VUNCITE' brand in the background. The mood is triumphant and prestigious." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBHDC6jBvM-63Kj4JV1MmH_3GAyq_qtO3zJQCiQQwRHAB6UVSVdWXRS9PkhoMxMTsNG64HmK48S-5-0VAr8JhrS38dHG-99bOqkNpTA_L6ZdK7Bowv5g6uQwEloNJ3Cms1GjDqy1Em0NaFPD8Fl0jJBkZ5FF3NkM1EHZNQqRsXI2l_0xLFsOFSk5OLelc1Wa33l5Qo5akkXWIf9sYVj_7H45tMxtnm9snXVkafLeJ4S9qH8FkT0cvZZg"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/20 to-transparent p-8 flex flex-col justify-end">
<span class="text-secondary font-label-md text-label-md mb-2">CASE STUDY</span>
<h3 class="font-headline-lg text-on-primary mb-4">From Mentor to Founder: The Story of NexGen AI</h3>
<p class="text-white/80 font-body-md max-w-lg mb-6">How a three-month mentorship at VUNCITE led to a $2M seed round for a sustainable energy startup.</p>
<button class="w-fit text-on-primary flex items-center gap-2 font-bold group/btn">
                                Read Full Story <span class="material-symbols-outlined group-hover/btn:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</div>
<!-- Sub Story 1 -->
<div class="md:col-span-5 md:row-span-1 glass-card rounded-3xl p-8 flex flex-col justify-center bg-secondary-container/10">
<div class="mb-4">
<span class="material-symbols-outlined text-4xl text-secondary">format_quote</span>
</div>
<p class="font-body-lg text-primary italic mb-6">"VUNCITE didn't just teach me how to code; they taught me how to lead a team through uncertainty. That's the real innovation."</p>
<div>
<p class="font-bold text-primary">Aisha Miller</p>
<p class="text-on-surface-variant font-label-md text-label-md">2023 Program Graduate</p>
</div>
</div>
<!-- Sub Story 2 -->
<div class="md:col-span-5 md:row-span-1 glass-card rounded-3xl p-8 flex items-center gap-6 overflow-hidden">
<div class="w-24 h-24 flex-shrink-0 rounded-2xl overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A close-up, high-detail shot of two diverse hands shaking over a minimalist desk with a clean laptop and architectural blueprints. The aesthetic is extremely high-end, clean, and professional. The lighting is bright day-light mode." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXeMt_lgH-2ztRe_EPIu5RRvM6Z4k0rqQO818Trk6Q0hF-Zo1pMvdh6BRapr871gRpf-2G6Bta8sMtyBm8_C9KdEgbhRH47SZ3HOMa8TAQqcfP2x1NcM0X-jVdBEg7OAOiZBo0a8lJsrRzB21WhDED8bm54nsq0GS_KtmO7uiWWCB_XAFmfN22YtRN4LvrVnqcKYj8h6S_3OuTMr_sGizCdpb3bwInPgdHuEUiXg_UhYpSibgqnFulHw"/>
</div>
<div>
<h4 class="font-headline-md text-headline-md text-primary">150+ Partnerships</h4>
<p class="text-on-surface-variant text-body-md">Connecting our top graduates directly with Fortune 500 innovation hubs.</p>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="py-xl px-8 lg:px-xl bg-white relative">
<div class="max-w-4xl mx-auto glass-panel p-12 lg:p-20 rounded-[40px] text-center shadow-2xl relative overflow-hidden">
<!-- Background decorative element -->
<div class="absolute -bottom-20 -left-20 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
<h2 class="font-display-lg text-display-lg-mobile lg:text-headline-xl text-primary mb-6 relative z-10">Ready to redefine your future?</h2>
<p class="text-on-surface-variant font-body-lg mb-10 max-w-xl mx-auto relative z-10">Applications for the Summer Cohort are now open. Limited seats available for high-potential candidates.</p>
<div class="flex flex-col sm:flex-row justify-center gap-sm relative z-10">
<button class="bg-primary text-on-primary px-10 py-5 rounded-2xl font-headline-md text-body-md font-bold shadow-xl shadow-primary/20 hover:scale-105 transition-transform">Apply Now</button>
<button class="bg-surface-container border border-outline-variant/30 text-primary px-10 py-5 rounded-2xl font-headline-md text-body-md font-bold hover:bg-surface-container-high transition-colors">Speak with an Advisor</button>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-tertiary-container border-t border-outline-variant/20 w-full pt-xl pb-md">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-8 lg:px-xl max-w-container-max mx-auto">
<div class="md:col-span-1 space-y-md">
<img alt="VUNCITE Logo" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuChiAybRo8x7TTVd5yRySf6D3gSocIXMBOEmvNwi5ys2fA4f1SFybH2a2GrRlTNCdCFqhMKXwq9z_1dPIA6bHzy9_R8oAcnmNzB6sFnaxPH3vQMenGpo7Q_SGUmKDtRQPIPTJdT5KuIUfE03ubyN3BbW9a_uLmdecvo-wpyR5H2jSxhgto1Q7r4QXU0YFaKDSuBfQtccnPokAgJekGp5Cf_8b5tKmN9L5yoM3Ft6xvitil8Fv2wF61dQCp4G91dnlwM13A"/>
<p class="text-on-surface-variant dark:text-on-tertiary-fixed-variant font-body-sm text-body-sm max-w-xs">
                    Accelerating human potential through strategic mentorship and innovation leadership training.
                </p>
</div>
<div class="space-y-sm">
<h5 class="font-bold text-primary dark:text-primary-fixed font-label-md text-label-md uppercase">Programs</h5>
<ul class="space-y-2">
<li><a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Youth Mentoring</a></li>
<li><a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Innovation Workshops</a></li>
<li><a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Leadership Circle</a></li>
</ul>
</div>
<div class="space-y-sm">
<h5 class="font-bold text-primary dark:text-primary-fixed font-label-md text-label-md uppercase">Company</h5>
<ul class="space-y-2">
<li><a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary transition-colors font-body-sm text-body-sm" href="#">About Us</a></li>
<li><a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Success Stories</a></li>
<li><a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary transition-colors font-body-sm text-body-sm" href="#">Careers</a></li>
</ul>
</div>
<div class="space-y-sm">
<h5 class="font-bold text-primary dark:text-primary-fixed font-label-md text-label-md uppercase">Contact</h5>
<ul class="space-y-2">
<li class="text-on-surface-variant dark:text-on-tertiary-fixed-variant font-body-sm text-body-sm">info@vuncite.tech</li>
<li class="text-on-surface-variant dark:text-on-tertiary-fixed-variant font-body-sm text-body-sm">+1 (800) VUNCITE</li>
</ul>
</div>
</div>
<div class="max-w-container-max mx-auto px-8 lg:px-xl mt-12 pt-8 border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-on-surface-variant dark:text-on-tertiary-fixed-variant font-label-md text-label-md">© 2024 VUNCITE Technology. All rights reserved.</p>
<div class="flex gap-gutter">
<a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary font-label-md text-label-md" href="#">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-on-tertiary-fixed-variant hover:text-primary font-label-md text-label-md" href="#">Terms of Service</a>
</div>
</div>
</footer>
<script>
        // Simple intersection observer for reveal animations
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

        document.querySelectorAll('.glass-card').forEach(el => {
            el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
            observer.observe(el);
        });
    </script>
</body></html>
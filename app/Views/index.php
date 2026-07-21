<!DOCTYPE html>

<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>VUNCITE | THINK • CREATE • INNOVATE</title>
    <?= $this->include('layout/head-links'); ?>
</head>

<body class="bg-brand-bg text-on-surface font-body-md overflow-x-hidden">

    <!-- 1. TopNavBar -->
    <?= $this->include('layout/header'); ?>

    <!-- 2. Hero Section -->
    <section class="pt-10 pb-10 px-8 lg:px-xl max-w-container-max mx-auto relative overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="reveal">
                <span
                    class="inline-block px-4 py-1.5 bg-brand-accent/10 text-secondary-fixed-dim font-label-md rounded-full mb-6">EMPOWERING
                    FUTURE INNOVATORS</span>
                <h1 class="font-display-lg text-display-lg text-brand-navy leading-[1.1] mb-8 tracking-tighter">
                    THINK • CREATE • <span class="text-gradient">INNOVATE</span>
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-lg">
                    VUNCITE is dedicated to equipping the next generation with deep technology awareness and practical
                    innovation skills through immersive experiences.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a class="px-8 py-4 bg-brand-navy text-white font-label-md rounded-xxl hover-lift flex items-center gap-2"
                        href="#programs">
                        Join a Workshop <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                    <a class="px-8 py-4 glass text-brand-navy font-label-md rounded-xxl hover-lift border border-brand-navy/10"
                        href="#programs">
                        Explore Programs
                    </a>
                </div>
            </div>
            <div class="relative h-[500px] lg:h-[600px] reveal">
                <!-- STITCH_THREEJS_START:ANIMATION_4 class="absolute inset-0 w-full h-full rounded-xxl" -->
                <div class="absolute inset-0 w-full h-full rounded-xxl" style="display:block;">
                    <script src="https://ajax.googleapis.com/ajax/libs/threejs/r125/three.min.js"></script>
                    <div id="threejs-container-ANIMATION_4" style="width:100%;height:100%"></div>
                    <script>
                    (function() {
                        const container = document.getElementById('threejs-container-ANIMATION_4');
                        const devicePixelRatio = window.devicePixelRatio || 1;
                        const width = container.clientWidth || window.innerWidth;
                        const height = container.clientHeight || window.innerHeight;

                        const scene = new THREE.Scene();
                        const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
                        const renderer = new THREE.WebGLRenderer({
                            alpha: true,
                            antialias: true
                        });
                        renderer.setSize(width, height);
                        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
                        container.appendChild(renderer.domElement);

                        // Create an abstract "Technology Core" - Spheres and rotating rings
                        const coreGroup = new THREE.Group();
                        scene.add(coreGroup);

                        const sphereGeometry = new THREE.SphereGeometry(1.5, 64, 64);
                        const sphereMaterial = new THREE.MeshPhongMaterial({
                            color: 0x09144D,
                            emissive: 0x050C34,
                            shininess: 100,
                            transparent: true,
                            opacity: 0.8
                        });
                        const coreSphere = new THREE.Mesh(sphereGeometry, sphereMaterial);
                        coreGroup.add(coreSphere);

                        // Rings representing data flows / connectivity
                        const ringGeometries = [
                            new THREE.TorusGeometry(2.5, 0.02, 16, 100),
                            new THREE.TorusGeometry(3.0, 0.02, 16, 100),
                            new THREE.TorusGeometry(3.5, 0.02, 16, 100)
                        ];

                        const ringMaterial = new THREE.MeshBasicMaterial({
                            color: 0xF5B400,
                            transparent: true,
                            opacity: 0.5
                        });
                        const rings = [];

                        ringGeometries.forEach((geo, i) => {
                            const ring = new THREE.Mesh(geo, ringMaterial);
                            ring.rotation.x = Math.random() * Math.PI;
                            ring.rotation.y = Math.random() * Math.PI;
                            coreGroup.add(ring);
                            rings.push(ring);
                        });

                        // Particles
                        const particlesGeometry = new THREE.BufferGeometry();
                        const particlesCount = 1000;
                        const posArray = new Float32Array(particlesCount * 3);

                        for (let i = 0; i < particlesCount * 3; i++) {
                            posArray[i] = (Math.random() - 0.5) * 15;
                        }

                        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
                        const particlesMaterial = new THREE.PointsMaterial({
                            size: 0.05,
                            color: 0x09144D,
                            transparent: true,
                            opacity: 0.6
                        });

                        const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
                        scene.add(particlesMesh);

                        // Lights
                        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
                        scene.add(ambientLight);

                        const pointLight = new THREE.PointLight(0xF5B400, 2);
                        pointLight.position.set(5, 5, 5);
                        scene.add(pointLight);

                        camera.position.z = 8;

                        const animate = () => {
                            requestAnimationFrame(animate);

                            coreGroup.rotation.y += 0.005;
                            coreGroup.rotation.x += 0.003;

                            rings.forEach((ring, i) => {
                                ring.rotation.z += 0.01 * (i + 1);
                                ring.rotation.y += 0.005;
                            });

                            particlesMesh.rotation.y += 0.001;

                            renderer.render(scene, camera);
                        };

                        window.addEventListener('resize', () => {
                            const newWidth = container.clientWidth || window.innerWidth;
                            const newHeight = container.clientHeight || window.innerHeight;

                            camera.aspect = newWidth / newHeight;
                            camera.updateProjectionMatrix();
                            renderer.setSize(newWidth, newHeight);
                        });

                        animate();

                    })();
                    </script>
                </div>
                <!-- STITCH_THREEJS_END:ANIMATION_4 -->
                <div class="absolute -bottom-8 -left-8 glass p-6 rounded-xxl max-w-xs shadow-xl border border-white/40">
                    <div class="flex items-center gap-4 mb-3">
                        <div class="w-10 h-10 rounded-full bg-brand-accent flex items-center justify-center text-white">
                            <span class="material-symbols-outlined" data-icon="lightbulb">lightbulb</span>
                        </div>
                        <span class="font-label-md text-brand-navy">Interactive Learning</span>
                    </div>
                    <p class="text-body-sm text-on-surface-variant">Engaging 3D modules that make complex tech concepts
                        intuitive and fun.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 3. About Section -->
    <section class="py-xl bg-white border-y border-outline-variant/10" id="about">
        <div class="max-w-container-max mx-auto px-8 lg:px-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 reveal">
                    <h2 class="font-headline-xl text-headline-xl text-brand-navy mb-6">Our Mission</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                        At VUNCITE, we believe that technology awareness is the cornerstone of modern literacy. We
                        bridge the gap between theoretical knowledge and real-world application, fostering a culture of
                        curiosity and problem-solving.
                    </p>
                    <div class="mt-8 space-y-4">
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined text-brand-accent">check_circle</span>
                            <span class="font-body-md text-on-surface">Pioneering story-based technical pedagogy.</span>
                        </div>
                        <div class="flex gap-4">
                            <span class="material-symbols-outlined text-brand-accent">check_circle</span>
                            <span class="font-body-md text-on-surface">Focused on sustainable and ethical
                                innovation.</span>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-7 grid grid-cols-2 gap-4 reveal">
                    <div class="space-y-4 pt-12">
                        <div class="h-64 rounded-xxl overflow-hidden">
                            <img class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                                data-alt="A modern tech lab environment with diverse students collaborating on robotics projects. Soft morning light filters through large windows, highlighting professional-grade tools and clean white surfaces. The atmosphere is energetic and collaborative, aligned with a premium startup aesthetic."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTdJcJoI787XLYi4RwqZZppBU0tlMNrYZ8O7vkn-V1-xJZp7LQCWuGsYMhoWCFSI-rJZfakpH56QtwSmprqMapHZeXvan98YKZKST0HxR9vtLGxtTXB7OhxFVODetWTQtIokiMlfYsHV1xf22kXq9wMsDi0ifq77FHidJjAgQmZLw164dk3gwklDcKIkrgKcXDpJo4PjczXl_Zgu5_RD9MLuzwksGkEt7OAas9lkV7CE_1TU8HjULIhQ" />
                        </div>
                        <div class="h-48 glass-dark rounded-xxl flex items-center justify-center">
                            <span class="text-brand-navy font-headline-md">Impact</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="h-48 bg-brand-navy rounded-xxl flex items-center justify-center p-8">
                            <p class="text-white font-label-md italic text-center">"Creating the builders of tomorrow,
                                today."</p>
                        </div>
                        <div class="h-64 rounded-xxl overflow-hidden">
                            <img class="w-full h-full object-cover"
                                data-alt="Detailed close-up of a high-tech prototype featuring glowing LEDs and intricate circuit patterns on a glass-like substrate. The photography uses shallow depth of field, focusing on the precision of the components against a soft-focus laboratory background. Colors are primarily brand navy and warm amber accents."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_MRRBBCZfNuSnqq0aePqpbZ5ovYGKUP0MBUzrmeNvdoZIf4PqlxgYHO9Co5jQMFXU6muwu_VGgWhGBNqk59Vkp0GJaA-gkD1gcmogKFKlcOVGREDwKY7Xkzu4OMD742ME1cuyMM-UT60q1T93AE1_XtAqFF8NBex16cXoDAcDIZxgNJGofQPEJVIheC4gdsGJ8whsuuuxIXMXlIJ4acqzE_onK1JBhbPLjtUAs4Cjg4Tv1UNVndzrag" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- 4. Services Section -->
    <section class="py-xl px-8 lg:px-xl max-w-container-max mx-auto">
        <div class="text-center mb-16 reveal">
            <h2 class="font-headline-xl text-headline-xl text-brand-navy mb-4">Our Core Pillars</h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto">Comprehensive educational
                experiences designed to transform students into technology creators.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
       
            <!-- Card 1 -->
            <div
                class="group relative overflow-hidden bg-white border border-[#D4AF37]/20 rounded-3xl p-8 transition-all duration-500 ease-out hover:bg-[#0B1F4D] hover:-translate-y-3 hover:shadow-[0_25px_60px_rgba(11,31,77,0.45)] hover:border-[#D4AF37]">
                <div
                    class="w-16 h-16 rounded-2xl bg-[#0B1F4D]/10 flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-[#D4AF37]/20 group-hover:rotate-6">
                    <span
                        class="material-symbols-outlined text-3xl text-[#0B1F4D] transition-all duration-500 group-hover:text-[#D4AF37]"
                        data-icon="settings_suggest">settings_suggest</span>
                </div>
                <h3
                    class="font-headline-md text-headline-md text-[#0B1F4D] mb-4 transition-colors duration-500 group-hover:text-[#D4AF37]">
                    Technology Workshops</h3>
                <p
                    class="text-body-md text-gray-600 mb-6 leading-7 transition-colors duration-500 group-hover:text-white">
                    Deep dives into emerging tech trends and
                    foundational digital literacy skills.</p>
                <a class="inline-flex items-center gap-2 font-semibold text-[#0B1F4D] transition-all duration-500 group-hover:text-[#D4AF37]"
                    href="#">Learn More <span
                        class="material-symbols-outlined text-sm transition-all duration-500 group-hover:translate-x-2">arrow_forward</span></a>
            </div>


            <!-- Card 2 -->
           <div
                class="group relative overflow-hidden bg-white border border-[#D4AF37]/20 rounded-3xl p-8 transition-all duration-500 ease-out hover:bg-[#0B1F4D] hover:-translate-y-3 hover:shadow-[0_25px_60px_rgba(11,31,77,0.45)] hover:border-[#D4AF37]">
               
                <div
                    class="w-16 h-16 rounded-2xl bg-[#0B1F4D]/10 flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-[#D4AF37]/20 group-hover:rotate-6">
                    <span class="material-symbols-outlined text-3xl" data-icon="auto_stories">auto_stories</span>
                </div>
                <h3
                    class="font-headline-md text-headline-md text-[#0B1F4D] mb-4 transition-colors duration-500 group-hover:text-[#D4AF37]">
                    Story-Based Learning</h3>
                <p
                    class="text-body-md text-gray-600 mb-6 leading-7 transition-colors duration-500 group-hover:text-white">
                    Complex technical concepts simplified through
                    narrative-driven educational paths.</p>
                <a class="inline-flex items-center gap-2 font-semibold text-[#0B1F4D] transition-all duration-500 group-hover:text-[#D4AF37]"
                    href="#">Learn More <span
                        class="material-symbols-outlined text-sm transition-all duration-500 group-hover:translate-x-2">arrow_forward</span></a>
            </div>
            <!-- Card 3 -->
           <div
                class="group relative overflow-hidden bg-white border border-[#D4AF37]/20 rounded-3xl p-8 transition-all duration-500 ease-out hover:bg-[#0B1F4D] hover:-translate-y-3 hover:shadow-[0_25px_60px_rgba(11,31,77,0.45)] hover:border-[#D4AF37]">
               
                <div
                    class="w-16 h-16 rounded-2xl bg-[#0B1F4D]/10 flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-[#D4AF37]/20 group-hover:rotate-6">
                    <span class="material-symbols-outlined text-3xl" data-icon="build">build</span>
                </div>
                <h3
                    class="font-headline-md text-headline-md text-[#0B1F4D] mb-4 transition-colors duration-500 group-hover:text-[#D4AF37]">
                    Hands-on Learning</h3>
                <p
                    class="text-body-md text-gray-600 mb-6 leading-7 transition-colors duration-500 group-hover:text-white">
                    Practical lab sessions where students build
                    tangible projects and prototypes.</p>
                <a class="inline-flex items-center gap-2 font-semibold text-[#0B1F4D] transition-all duration-500 group-hover:text-[#D4AF37]"
                    href="#">Learn More <span
                        class="material-symbols-outlined text-sm transition-all duration-500 group-hover:translate-x-2">arrow_forward</span></a>
            </div>
            <!-- Card 4 -->
            <div
                class="group relative overflow-hidden bg-white border border-[#D4AF37]/20 rounded-3xl p-8 transition-all duration-500 ease-out hover:bg-[#0B1F4D] hover:-translate-y-3 hover:shadow-[0_25px_60px_rgba(11,31,77,0.45)] hover:border-[#D4AF37]">
               
                <div
                    class="w-16 h-16 rounded-2xl bg-[#0B1F4D]/10 flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-[#D4AF37]/20 group-hover:rotate-6">
                    <span class="material-symbols-outlined text-3xl" data-icon="groups">groups</span>
                </div>
                <h3
                    class="font-headline-md text-headline-md text-[#0B1F4D] mb-4 transition-colors duration-500 group-hover:text-[#D4AF37]">
                    Youth Mentoring</h3>
                <p
                    class="text-body-md text-gray-600 mb-6 leading-7 transition-colors duration-500 group-hover:text-white">
                    One-on-one guidance from industry professionals to
                    shape future career paths.</p>
                <a class="inline-flex items-center gap-2 font-semibold text-[#0B1F4D] transition-all duration-500 group-hover:text-[#D4AF37]"
                    href="#">Learn More <span
                        class="material-symbols-outlined text-sm transition-all duration-500 group-hover:translate-x-2">arrow_forward</span></a>
            </div>
            <!-- Card 5 -->
           <div
                class="group relative overflow-hidden bg-white border border-[#D4AF37]/20 rounded-3xl p-8 transition-all duration-500 ease-out hover:bg-[#0B1F4D] hover:-translate-y-3 hover:shadow-[0_25px_60px_rgba(11,31,77,0.45)] hover:border-[#D4AF37]">
               
                <div
                    class="w-16 h-16 rounded-2xl bg-[#0B1F4D]/10 flex items-center justify-center mb-6 transition-all duration-500 group-hover:bg-[#D4AF37]/20 group-hover:rotate-6">
                    <span class="material-symbols-outlined text-3xl" data-icon="rocket_launch">rocket_launch</span>
                </div>
                <h3
                    class="font-headline-md text-headline-md text-[#0B1F4D] mb-4 transition-colors duration-500 group-hover:text-[#D4AF37]">
                    Prototype Development</h3>
                <p
                    class="text-body-md text-gray-600 mb-6 leading-7 transition-colors duration-500 group-hover:text-white">
                    Transforming conceptual ideas into functional
                    minimal viable products.</p>
                <a class="inline-flex items-center gap-2 font-semibold text-[#0B1F4D] transition-all duration-500 group-hover:text-[#D4AF37]"
                    href="#">Learn More <span
                        class="material-symbols-outlined text-sm transition-all duration-500 group-hover:translate-x-2">arrow_forward</span></a>
            </div>
        </div>
    </section>


    <!-- 5. Technology Domains -->
    <section class="py-xl bg-brand-navy text-white overflow-hidden">
        <div class="max-w-container-max mx-auto px-8 lg:px-xl">
            <div class="mb-16 reveal">
                <h2 class="font-headline-xl text-headline-xl mb-4">Technology Domains</h2>
                <p class="text-primary-fixed max-w-2xl">Exploring the frontiers of engineering and digital creation
                    across 12 specialized tracks.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <!-- Domain Loop -->
                <script>
                const domains = [{
                        icon: "neurology",
                        label: "AI & ML"
                    },
                    {
                        icon: "smart_toy",
                        label: "Robotics"
                    },
                    {
                        icon: "sensors",
                        label: "IoT"
                    },
                    {
                        icon: "memory",
                        label: "Electronics"
                    },
                    {
                        icon: "terminal",
                        label: "Coding"
                    },
                    {
                        icon: "view_in_ar",
                        label: "AR/VR"
                    },
                    {
                        icon: "solar_power",
                        label: "Renewables"
                    },
                    {
                        icon: "rocket",
                        label: "Aerospace"
                    },
                    {
                        icon: "biotech",
                        label: "BioTech"
                    },
                    {
                        icon: "shield_lock",
                        label: "CyberSecurity"
                    },
                    {
                        icon: "cloud",
                        label: "Cloud Tech"
                    },
                    {
                        icon: "3d_rotation",
                        label: "3D Design"
                    }
                ];
                document.write(domains.map(d => `
                        <div class="glass-dark p-6 rounded-xxl flex flex-col items-center gap-4 hover:bg-white/10 transition-all cursor-default group reveal">
                            <span class="material-symbols-outlined text-4xl text-brand-accent group-hover:scale-110 transition-transform">${d.icon}</span>
                            <span class="font-label-md tracking-wider uppercase text-xs">${d.label}</span>
                        </div>
                    `).join(''));
                </script>
            </div>
        </div>
    </section>
    <!-- 6. Learning Journey -->
    <section class="py-xl px-8 lg:px-xl max-w-container-max mx-auto overflow-hidden">
        <h2 class="font-headline-xl text-headline-xl text-brand-navy mb-16 text-center reveal">The Learning Journey</h2>
        <div class="relative">
            <!-- Timeline Line -->
            <div class="hidden lg:block absolute top-1/2 left-0 w-full h-0.5 bg-outline-variant/20 -translate-y-1/2">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <script>
                const steps = ["Discover", "Learn", "Build", "Prototype", "Present", "Innovate"];
                document.write(steps.map((step, i) => `
                        <div class="relative flex flex-col items-center text-center reveal" style="transition-delay: ${i * 100}ms">
                            <div class="w-12 h-12 rounded-full bg-brand-bg border-4 border-brand-navy flex items-center justify-center z-10 mb-6 font-bold text-brand-navy">
                                ${i + 1}
                            </div>
                            <h4 class="font-headline-md text-brand-navy mb-2">${step}</h4>
                            <p class="text-body-sm text-on-surface-variant">Step description goes here with impact.</p>
                        </div>
                    `).join(''));
                </script>
            </div>
        </div>
    </section>
    <!-- 7. Programs -->
    <section class="py-xl bg-surface-container-low" id="programs">
        <div class="max-w-container-max mx-auto px-8 lg:px-xl">
            <div class="flex justify-between items-end mb-12 reveal">
                <div>
                    <h2 class="font-headline-xl text-headline-xl text-brand-navy mb-4">Our Programs</h2>
                    <p class="text-on-surface-variant">Structured learning paths for various age groups and interests.
                    </p>
                </div>
                <button class="hidden md:block font-label-md text-brand-navy hover:underline underline-offset-8">View
                    All Programs</button>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Program 1 -->
                <div class="bg-white rounded-xxl overflow-hidden shadow-sm hover-lift reveal">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            data-alt="Close up of a student in a bright classroom wearing VR goggles and interacting with digital interfaces. The lighting is soft and neutral, highlighting the focus on the student's face. The overall aesthetic is clean, professional, and tech-forward."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAl1ajDV0UW1_GXtBJ7PWLfyYpFrOea4on2EyfAg4hT8ui0R2HVab7F_XLgUrISl2Ba5J8m8_0u33iq8aDEacKnO5hNZHkKEoutt_kOlvW3jMQ1oJt9sF8PH-ZBfbHvw39f_Nz7--Je0_6r5gJNPNf9wfff72iq9eeZl2RiIiLgrvZdgxoLI5ePVVN17iJ1b7EsjyB-FlHrfJOWstrP8RVpgKyx5wUk7ppl-LDNInpoAyZYz6q0hpsIXg" />
                    </div>
                    <div class="p-8">
                        <span class="text-brand-accent font-label-md">KIDS 8-12</span>
                        <h3 class="font-headline-md text-headline-md text-brand-navy mt-2 mb-4">STEM Explorers</h3>
                        <p class="text-body-md text-on-surface-variant mb-6">Introduction to robotics and visual coding
                            through play and storytelling.</p>
                        <button
                            class="w-full py-4 border border-brand-navy/10 rounded-xl font-label-md text-brand-navy hover:bg-brand-navy hover:text-white transition-all">Enroll
                            Now</button>
                    </div>
                </div>
                <!-- Program 2 -->
                <div class="bg-white rounded-xxl overflow-hidden shadow-sm hover-lift reveal">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            data-alt="Group of teenagers in a sleek, modern coworking space working with laptops and electronic breadboards. Warm afternoon light creates a pleasant, productive atmosphere. Professional photography style with natural skin tones and vibrant tech accents."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFXAigCQ6XgdY6VM5aF5iVHkApW-7pCqO_s0ErHhTNez8ZAn5JXu0Jv8RI_CRuRdplMAxMf3XNgOrJRm4BvPKdFYbxVl2t4PgiywZfSxj3crMmz9UzygWSKL7_umbWMDVSa4oxoFJQl-KoItIoVWOn6G6IJctYj1zgFNUTUwYfp4qOaT4KgjunHn_GdMuUmUqXrZJbiKh5Acs_WZuIJX3iZgoXjeBYTbAZ8TlKe1RgxWlfdj3BsXBI4w" />
                    </div>
                    <div class="p-8">
                        <span class="text-brand-accent font-label-md">TEENS 13-17</span>
                        <h3 class="font-headline-md text-headline-md text-brand-navy mt-2 mb-4">Coding Bootcamps</h3>
                        <p class="text-body-md text-on-surface-variant mb-6">Intensive Python and Web Development tracks
                            focused on building real apps.</p>
                        <button
                            class="w-full py-4 border border-brand-navy/10 rounded-xl font-label-md text-brand-navy hover:bg-brand-navy hover:text-white transition-all">Enroll
                            Now</button>
                    </div>
                </div>
                <!-- Program 3 -->
                <div class="bg-white rounded-xxl overflow-hidden shadow-sm hover-lift reveal">
                    <div class="h-48 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            data-alt="An advanced student presenting a sophisticated hardware prototype on a stage. The background shows a large screen with architectural tech diagrams. High-contrast theatrical lighting focuses on the innovator, giving a high-end enterprise feel."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOPj_egREQv4RPfDy1PlnUFz_D7KHx_EoWM_HQfoFqID1ZXh3sadmScOqLnv4YPAi7vmmY5zATJaIeUuunGVrby9_U5CFG6kh66bwMJIx-qdk4LX7HkQCxA5qVsKWOgUmmsCWkfcFRhW-MncGGrJ5cSNcE6AUsHhqWH1l4PbB7YlvOP_dhe6JjSXkZQlmJcbZ9PzWioKWBwzjaC6lFKQ5_xYux22uQkJTwOcO9twnTTm62sKyrJXy_ew" />
                    </div>
                    <div class="p-8">
                        <span class="text-brand-accent font-label-md">ALL AGES</span>
                        <h3 class="font-headline-md text-headline-md text-brand-navy mt-2 mb-4">Innovation Challenges
                        </h3>
                        <p class="text-body-md text-on-surface-variant mb-6">Solve real-world problems using tech and
                            pitch to industry experts.</p>
                        <button
                            class="w-full py-4 border border-brand-navy/10 rounded-xl font-label-md text-brand-navy hover:bg-brand-navy hover:text-white transition-all">Enroll
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 8. Statistics -->
    <section class="py-xl bg-brand-navy text-white">
        <div class="max-w-container-max mx-auto px-8 lg:px-xl">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
                <div class="reveal">
                    <div class="font-display-lg text-display-lg text-brand-accent mb-2" id="stat-1">0</div>
                    <p class="font-label-md uppercase tracking-widest text-primary-fixed">Students Reached</p>
                </div>
                <div class="reveal" style="transition-delay: 100ms">
                    <div class="font-display-lg text-display-lg text-brand-accent mb-2" id="stat-2">0</div>
                    <p class="font-label-md uppercase tracking-widest text-primary-fixed">Workshops Done</p>
                </div>
                <div class="reveal" style="transition-delay: 200ms">
                    <div class="font-display-lg text-display-lg text-brand-accent mb-2" id="stat-3">0</div>
                    <p class="font-label-md uppercase tracking-widest text-primary-fixed">Institutions</p>
                </div>
                <div class="reveal" style="transition-delay: 300ms">
                    <div class="font-display-lg text-display-lg text-brand-accent mb-2" id="stat-4">0</div>
                    <p class="font-label-md uppercase tracking-widest text-primary-fixed">Live Projects</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 9. Gallery -->
    <!-- Gallery Section -->
<section class="py-20 bg-gradient-to-b from-white via-slate-50 to-white">

    <!-- Heading -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center mb-16">

        <span
            class="inline-block px-4 py-2 rounded-full bg-[#D4AF37]/10 text-[#D4AF37] font-semibold tracking-wider uppercase text-sm">
            Our Gallery
        </span>

        <h2 class="mt-5 text-4xl md:text-5xl font-bold text-[#0B1F4D]">
            Moments of Learning & Innovation
        </h2>

        <p class="mt-5 max-w-3xl mx-auto text-gray-600 text-lg">
            Discover how VUNCITE inspires young innovators through technology
            workshops, hands-on learning, mentoring, and real-world projects.
        </p>

    </div>

    <!-- Gallery -->
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Image 1 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery1.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Workshop">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Technology Workshop
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Practical Learning Sessions
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 2 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery2.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Story Learning">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Story-Based Learning
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Creative Education
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 3 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery3.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Prototype">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Prototype Development
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Innovation in Action
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 4 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery4.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Mentoring">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Student Mentoring
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Future Leaders
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 5 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery5.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Coding">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Coding Sessions
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Learning by Doing
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 6 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery6.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Robotics">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Robotics Lab
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Future Technology
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 7 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery7.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Projects">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Student Projects
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Creativity Unleashed
                        </p>
                    </div>

                </div>

            </div>

            <!-- Image 8 -->
            <div class="group overflow-hidden rounded-3xl shadow-lg relative">

                <img src="images/gallery8.jpg"
                    class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                    alt="Events">

                <div
                    class="absolute inset-0 bg-gradient-to-t from-[#0B1F4D]/90 via-[#0B1F4D]/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">

                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-white text-xl font-semibold">
                            Tech Events
                        </h3>
                        <p class="text-[#D4AF37] text-sm">
                            Inspiring Young Minds
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
    <!-- 10. Testimonials -->
    <section class="py-xl bg-white border-y border-outline-variant/10">
        <div class="max-w-container-max mx-auto px-8 lg:px-xl overflow-hidden">
            <h2 class="font-headline-xl text-headline-xl text-brand-navy text-center mb-16 reveal">Voices of Impact</h2>
            <div class="flex flex-nowrap gap-8 animate-scroll-horizontal">
                <script>
                const testimonials = [{
                        name: "Sarah J.",
                        role: "High School Student",
                        text: "VUNCITE changed how I look at my computer. It's no longer just for gaming; it's a tool for creation."
                    },
                    {
                        name: "Mark Wilson",
                        role: "Science Teacher",
                        text: "The workshops brought a level of technical depth our curriculum was missing. Truly transformative for our kids."
                    },
                    {
                        name: "Elena R.",
                        role: "Parent",
                        text: "My daughter found her passion for coding through their story-based approach. It just clicked!"
                    },
                    {
                        name: "David K.",
                        role: "Engineering Lead",
                        text: "I've mentored several VUNCITE students. Their foundational knowledge and curiosity are exceptional."
                    }
                ];
                document.write(testimonials.map(t => `
                        <div class="min-w-[350px] glass p-8 rounded-xxl reveal">
                            <div class="flex text-brand-accent mb-4">
                                <span class="material-symbols-outlined fill">star</span>
                                <span class="material-symbols-outlined fill">star</span>
                                <span class="material-symbols-outlined fill">star</span>
                                <span class="material-symbols-outlined fill">star</span>
                                <span class="material-symbols-outlined fill">star</span>
                            </div>
                            <p class="font-body-md text-on-surface mb-6 italic">"${t.text}"</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-brand-navy/10 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-brand-navy">person</span>
                                </div>
                                <div>
                                    <p class="font-label-md text-brand-navy">${t.name}</p>
                                    <p class="text-xs text-on-surface-variant">${t.role}</p>
                                </div>
                            </div>
                        </div>
                    `).join(''));
                </script>
            </div>
        </div>
    </section>
    <!-- 11. FAQ -->
    <section class="py-xl px-8 lg:px-xl max-w-container-max mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="reveal">
                <h2 class="font-headline-xl text-headline-xl text-brand-navy mb-6">Frequently Asked Questions</h2>
                <p class="text-on-surface-variant mb-8">Can't find what you're looking for? Reach out to our support
                    team for personalized assistance.</p>
                <button class="px-8 py-4 bg-brand-navy text-white rounded-xl font-label-md hover-lift">Contact
                    Support</button>
            </div>
            <div class="space-y-4 reveal">
                <details class="group glass rounded-xxl overflow-hidden border border-brand-navy/5">
                    <summary
                        class="flex justify-between items-center p-6 cursor-pointer list-none font-label-md text-brand-navy">
                        <span>Are the workshops suitable for absolute beginners?</span>
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-body-sm text-on-surface-variant border-t border-brand-navy/5">
                        Yes! Most of our programs are designed with a low barrier to entry. We start from the basics and
                        progressively build complexity.
                    </div>
                </details>
                <details class="group glass rounded-xxl overflow-hidden border border-brand-navy/5">
                    <summary
                        class="flex justify-between items-center p-6 cursor-pointer list-none font-label-md text-brand-navy">
                        <span>Do we need to bring our own equipment?</span>
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-body-sm text-on-surface-variant border-t border-brand-navy/5">
                        We provide all necessary hardware, laptops, and software for our in-person workshops to ensure
                        an equitable learning experience for everyone.
                    </div>
                </details>
                <details class="group glass rounded-xxl overflow-hidden border border-brand-navy/5">
                    <summary
                        class="flex justify-between items-center p-6 cursor-pointer list-none font-label-md text-brand-navy">
                        <span>How can schools partner with VUNCITE?</span>
                        <span
                            class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-body-sm text-on-surface-variant border-t border-brand-navy/5">
                        Schools can reach out via our Partnership form. We offer both one-off workshops and long-term
                        curriculum integration plans.
                    </div>
                </details>
            </div>
        </div>
    </section>
    <!-- 12. Footer -->
    <?= $this->include('layout/footer'); ?>
    <script>
    // Intersection Observer for reveal animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

    // Animated Counters
    function animateCounter(id, target, duration = 2000) {
        const obj = document.getElementById(id);
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            obj.innerText = Math.floor(progress * target) + (target > 1000 ? '+' : '');
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Trigger counters when in view
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter('stat-1', 100);
                animateCounter('stat-2', 3);
                animateCounter('stat-3', 3);
                animateCounter('stat-4', 5);
                counterObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });

    const statsSection = document.querySelector('#stat-1')?.parentElement?.parentElement;
    if (statsSection) counterObserver.observe(statsSection);

    // Smooth interaction for active nav
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('shadow-md');
            header.classList.add('bg-white/90');
        } else {
            header.classList.remove('shadow-md');
            header.classList.remove('bg-white/90');
        }
    });
    </script>
</body>

</html>
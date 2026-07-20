    <header
        class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-lg border-b border-outline-variant/10 shadow-sm h-20">
        <nav class="flex justify-between items-center h-full px-8 lg:px-xl max-w-container-max mx-auto">
            <div class="flex items-center gap-2">

            <img alt="VUNCITE Logo" class="h-20 w-50" src="assets/images/logo.jpg">

                <!-- <span class="font-headline-md text-headline-md font-bold tracking-tight text-brand-navy">VUNCITE</span> -->
            </div>
            <ul class="hidden md:flex items-center gap-8">
                <li><a
                
                
                
                class="font-label-md text-brand-navy font-bold border-b-2 border-brand-navy pb-1"
                        href="#">Home</a></li>
                <li><a href="<?= base_url('about-us') ?>"
                class="font-label-md text-on-surface-variant hover:text-brand-navy transition-colors">About</a>
             </li>
                <li class="relative group">
    <a href="#services"
       class="flex items-center gap-1 font-label-md text-on-surface-variant hover:text-[#D4AF37] transition-colors">
        Services

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">
            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 9l-7 7-7-7"/>
        </svg>
    </a>

    <div
        class="absolute left-0 mt-3 w-72 bg-[#0B1F3A] border border-[#D4AF37] rounded-lg shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
       
        <a href="<?= base_url('tech-awareness') ?>" class="block px-5 py-3 text-white hover:bg-[#D4AF37] hover:text-[#0B1F3A] transition">Technology Workshops</a>

        <a href="<?= base_url('story-based') ?>" class="block px-5 py-3 text-white hover:bg-[#D4AF37] hover:text-[#0B1F3A] transition">Story-Based Learning</a>

        <a href="<?= base_url('handson') ?>" class="block px-5 py-3 text-white hover:bg-[#D4AF37] hover:text-[#0B1F3A] transition">Hands-on Learning</a>

       <a href="<?= base_url('youth-mentoring') ?>" class="block px-5 py-3 text-white hover:bg-[#D4AF37] hover:text-[#0B1F3A] transition">Youth Mentoring</a>

       <a href="<?= base_url('prototype') ?>" class="block px-5 py-3 text-white hover:bg-[#D4AF37] hover:text-[#0B1F3A] transition">Prototype Development</a>

    </div>
</li>
                <li><a class="font-label-md text-on-surface-variant hover:text-brand-navy transition-colors"
                        href="#programs">Workshops</a></li>
                <li><a class="font-label-md text-on-surface-variant hover:text-brand-navy transition-colors"
                        href="#gallery">Gallery</a></li>
                <li><a class="font-label-md text-on-surface-variant hover:text-brand-navy transition-colors"
                        href="#blog">Blog</a></li>
            </ul>
            <div class="flex items-center gap-4">
                <button
                    class="hidden lg:block font-label-md px-6 py-3 rounded-xl text-brand-navy hover:bg-brand-navy/5 transition-all">Contact</button>
                <button
                    class="font-label-md px-6 py-3 bg-brand-navy text-white rounded-xl hover:opacity-90 active:scale-95 transition-all">Get
                    Started</button>
            </div>
        </nav>
    </header>
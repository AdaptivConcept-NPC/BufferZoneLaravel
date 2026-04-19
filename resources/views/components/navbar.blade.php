<nav class="bg-white sticky top-0 z-50 navbar-sticky" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="flex items-center gap-3 no-underline">
                    <img src="{{ asset('images/icon-tr.png') }}" alt="Buffer Zone EMS" style="height: 3.5rem; width: auto;">
                    <div class="flex flex-col justify-center leading-tight" style="gap: 4px;">
                        <span style="font-family: Montserrat, sans-serif; font-weight: 900; color: #213340; font-size: 1.5rem; letter-spacing: -0.02em;">
                            Buffer Zone EMS
                        </span>
                        <div style="font-family: Montserrat, sans-serif; font-weight: 700; font-size: 0.5rem; letter-spacing: 0.25em; color: #D31111;">
                            PARAMEDICS | EVENTS | TRAINING
                        </div>
                    </div>
                </a>
            </div>

            <!-- Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-6">
                    <a href="{{ url('/') }}" class="text-gray-700 font-medium transition-colors duration-200 nav-link nav-link-animated px-3 py-2 text-sm" data-id="home">Home</a>
                    <a href="{{ url('/about') }}" class="text-gray-700 font-medium transition-colors duration-200 nav-link nav-link-animated px-3 py-2 text-sm" data-id="about">About</a>

                    <div class="relative group">
                        <button class="text-gray-700 font-medium transition-colors duration-200 nav-link nav-link-animated px-3 py-2 text-sm flex items-center gap-1" data-id="services">
                            Services
                            <svg class="w-3 h-3 opacity-60 group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 w-64 z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            <div class="bg-white rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.15)] border border-gray-100 p-2 space-y-1">
                                <a href="{{ url('/services/medical-cover') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-9 h-9 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-medkit"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-bold">Medical Cover</span>
                                        <span class="text-[0.65rem] text-[#8BA4B4] font-medium leading-tight mt-0.5 group-hover/item:text-[#D31111]/70 transition-colors">Event standby & support</span>
                                    </div>
                                </a>
                                <a href="{{ url('/services/training') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-9 h-9 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-bold">Training Workshops</span>
                                        <span class="text-[0.65rem] text-[#8BA4B4] font-medium leading-tight mt-0.5 group-hover/item:text-[#D31111]/70 transition-colors">First aid & emergency skills</span>
                                    </div>
                                </a>
                                <a href="{{ url('/services/staffing') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-9 h-9 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-bold">Staffing Contingent</span>
                                        <span class="text-[0.65rem] text-[#8BA4B4] font-medium leading-tight mt-0.5 group-hover/item:text-[#D31111]/70 transition-colors">Professional placements</span>
                                    </div>
                                </a>
                                <a href="{{ url('/services/corporate') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-9 h-9 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-bold">Corporate Packages</span>
                                        <span class="text-[0.65rem] text-[#8BA4B4] font-medium leading-tight mt-0.5 group-hover/item:text-[#D31111]/70 transition-colors">Business EMS solutions</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <button class="text-gray-700 font-medium transition-colors duration-200 nav-link-animated px-3 py-2 text-sm flex items-center gap-1">
                            Events
                            <svg class="w-3 h-3 opacity-60 group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-2 w-56 z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            <div class="bg-white rounded-2xl shadow-[0_10px_40px_-10px_rgba(0,0,0,0.15)] border border-gray-100 p-2 space-y-1">
                                <a href="{{ url('/events/sports') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-8 h-8 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-running"></i>
                                    </div>
                                    <span class="font-bold">Sports & Athletics</span>
                                </a>
                                <a href="{{ url('/events/concerts') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-8 h-8 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-music"></i>
                                    </div>
                                    <span class="font-bold">Concerts & Festivals</span>
                                </a>
                                <a href="{{ url('/events/corporate') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-8 h-8 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <span class="font-bold">Corporate Functions</span>
                                </a>
                                <a href="{{ url('/events/community') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-all group/item shadow-sm hover:shadow-md">
                                    <div class="w-8 h-8 rounded-lg bg-[#D31111]/10 text-[#D31111] flex flex-shrink-0 items-center justify-center group-hover/item:scale-110 transition-transform">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <span class="font-bold">Community & Public</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Actions -->
            <div class="flex items-center gap-3">
                <!-- Phone CTA with Pulse -->
                <div class="cta-pulse-wrapper hidden sm:inline-flex">
                    <a href="tel:+27872655820" class="btn-emergency flex items-center gap-2 px-3 lg:px-5 py-2 whitespace-nowrap" style="position: relative; font-size: clamp(11px, 1.2vw, 14px);">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="font-bold tracking-tight">087 265 5820</span>
                    </a>
                </div>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/27733503114" target="_blank" rel="noopener noreferrer" class="hidden sm:flex items-center justify-center p-2 rounded-xl transition-all hover:scale-105" style="background: #25D366; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.25); border: none; cursor: pointer;" title="WhatsApp Us">
                    <img src="{{ asset('assets/icons/whatsapp.png') }}" alt="WhatsApp" style="width: 20px; height: 20px;" />
                </a>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-red-600 p-2 rounded-lg">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 shadow-md">Home</a>
        <a href="{{ url('/about') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 shadow-md">About</a>
        <div class="border-t border-gray-200">
            <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 shadow-md toggle-submenu" data-menu="services">Services</button>
            <div id="services-submenu" class="hidden bg-gray-50/50">
                <a href="{{ url('/services/medical-cover') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors border-b border-gray-100 text-sm font-semibold">
                    <i class="fas fa-medkit text-[#D31111] w-4 text-center"></i> Medical Cover
                </a>
                <a href="{{ url('/services/training') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors border-b border-gray-100 text-sm font-semibold">
                    <i class="fas fa-graduation-cap text-[#D31111] w-4 text-center"></i> Training Workshops
                </a>
                <a href="{{ url('/services/staffing') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors border-b border-gray-100 text-sm font-semibold">
                    <i class="fas fa-user-md text-[#D31111] w-4 text-center"></i> Staffing Contingent
                </a>
                <a href="{{ url('/services/corporate') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors text-sm font-semibold">
                    <i class="fas fa-briefcase text-[#D31111] w-4 text-center"></i> Corporate Packages
                </a>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100 shadow-md toggle-submenu" data-menu="events">Events</button>
            <div id="events-submenu" class="hidden bg-gray-50/50">
                <a href="{{ url('/events/sports') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors border-b border-gray-100 text-sm font-semibold">
                    <i class="fas fa-running text-[#D31111] w-4 text-center"></i> Sports & Athletics
                </a>
                <a href="{{ url('/events/concerts') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors border-b border-gray-100 text-sm font-semibold">
                    <i class="fas fa-music text-[#D31111] w-4 text-center"></i> Concerts & Festivals
                </a>
                <a href="{{ url('/events/corporate') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors border-b border-gray-100 text-sm font-semibold">
                    <i class="fas fa-building text-[#D31111] w-4 text-center"></i> Corporate Functions
                </a>
                <a href="{{ url('/events/community') }}" class="flex items-center gap-3 px-8 py-3 text-[#213340] hover:bg-[#D31111]/5 hover:text-[#D31111] transition-colors text-sm font-semibold">
                    <i class="fas fa-users text-[#D31111] w-4 text-center"></i> Community & Public
                </a>
            </div>
        </div>
        <div class="border-t border-gray-200 p-4 flex gap-2">
            <div class="cta-pulse-wrapper flex-1">
                <a href="tel:+27872655820" class="btn-emergency w-full text-center flex items-center justify-center gap-2 px-4 py-2 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>Call</span>
                </a>
            </div>
            <a href="https://wa.me/27733503114" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center p-2 rounded-xl transition-all hover:scale-105" style="background: #25D366; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.25);">
                <svg class="w-5 h-5" fill="white" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.272-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.67-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.076 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421-7.403h-.004a9.87 9.87 0 00-4.971 1.26l-.36.214-3.696-1.05.967 3.554-.235.374a9.847 9.847 0 001.152 5.678c2.255 3.944 6.694 5.532 11.046 5.053-1.063 1.318-2.73 2.1-4.597 2.1-1.378 0-2.692-.35-3.811-.963l-2.768.772 1.081-3.637a9.85 9.85 0 01-1.5-5.342c0-5.437 4.424-9.85 9.85-9.85 2.635 0 5.136.996 7.04 2.808.697.607 1.324 1.287 1.859 2.023.535.736.941 1.526 1.221 2.34.28.814.434 1.669.434 2.54 0 5.436-4.424 9.85-9.85 9.85z" />
                </svg>
            </a>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Mobile submenu toggle
        document.querySelectorAll('.toggle-submenu').forEach(btn => {
            btn.addEventListener('click', function() {
                const menuId = this.getAttribute('data-menu') + '-submenu';
                const submenu = document.getElementById(menuId);
                submenu.classList.toggle('hidden');
            });
        });

        // Scroll detection for navbar shadow
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 20) {
                navbar.style.boxShadow = '0 4px 12px rgba(0,0,0,0.15)';
            } else {
                navbar.style.boxShadow = 'none';
            }
        });

        // Active link detection for home page sections
        if (isHomePage) {
            const navLinks = document.querySelectorAll('.nav-link-animated');
            
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -20% 0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('data-id') === id) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, observerOptions);

            // Observe all sections that have a corresponding nav link
            navLinks.forEach(link => {
                const sectionId = link.getAttribute('data-id');
                if (sectionId) {
                    const section = document.getElementById(sectionId);
                    if (section) observer.observe(section);
                }
            });
            
            // Special case for top of page (Home)
            window.addEventListener('scroll', () => {
                if (window.scrollY < 100) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('data-id') === 'home') {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }
    </script>
</nav>
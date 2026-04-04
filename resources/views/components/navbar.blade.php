<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold" style="color: #213340;">
                    Buffer Zone
                </a>
            </div>

            <!-- Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/" class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="/team" class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">Team</a>
                    
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">
                            Services
                        </button>
                        <div class="hidden group-hover:block absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg">
                            <a href="/services/medical-cover" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Medical Cover</a>
                            <a href="/services/training" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Training</a>
                            <a href="/services/staffing" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Staffing</a>
                            <a href="/services/corporate" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Corporate Packages</a>
                        </div>
                    </div>
                    
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">
                            Events
                        </button>
                        <div class="hidden group-hover:block absolute left-0 mt-0 w-48 bg-white rounded-md shadow-lg">
                            <a href="/events/sports" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sports Events</a>
                            <a href="/events/concerts" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Concerts</a>
                            <a href="/events/corporate" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Corporate Events</a>
                            <a href="/events/community" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Community Events</a>
                        </div>
                    </div>
                    
                    <a href="/careers" class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">Careers</a>
                    <a href="/partners" class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">Partners</a>
                    <a href="/#contact" class="btn-emergency text-white px-4 py-2 rounded">Contact</a>
                    <a href="/admin/login" class="text-gray-700 hover:text-blue-900 px-3 py-2 rounded-md text-sm font-medium">Admin</a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-900">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <a href="/" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
        <a href="/about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
        <a href="/team" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Team</a>
        <a href="/careers" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Careers</a>
        <a href="/partners" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Partners</a>
        <a href="/#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
        <a href="/admin/login" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Admin</a>
    </div>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</nav>

<header class="bg-white shadow-md fixed w-full top-0 z-40">
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">JMC</span>
                    </div>
                    <span class="ml-3 text-xl font-bold text-gray-900 hidden sm:block">IT Consultant</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-8">
                    <a href="{{ route('home') }}#home"
                       class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('home') }}#layanan"
                       class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200">
                        Layanan
                    </a>
                    <a href="{{ route('portofolio') }}"
                       class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('portofolio*') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Portofolio
                    </a>
                    <a href="{{ route('kontak') }}"
                       class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition-colors duration-200 {{ request()->routeIs('kontak') ? 'text-blue-600 border-b-2 border-blue-600' : '' }}">
                        Kontak
                    </a>
                    <a href="{{ route('kontak') }}"
                       class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full text-sm font-medium transition-all duration-200 hover:scale-105">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button"
                        class="text-gray-700 hover:text-blue-600 focus:outline-none focus:text-blue-600">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t">
                <a href="{{ route('home') }}#home"
                   class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">
                    Home
                </a>
                <a href="{{ route('home') }}#layanan"
                   class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">
                    Layanan
                </a>
                <a href="{{ route('portofolio') }}"
                   class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">
                    Portofolio
                </a>
                <a href="{{ route('kontak') }}"
                   class="block text-gray-700 hover:text-blue-600 px-3 py-2 text-base font-medium">
                    Kontak
                </a>
                <a href="{{ route('kontak') }}"
                   class="block bg-orange-500 hover:bg-orange-600 text-white px-3 py-2 text-base font-medium rounded-lg mt-2">
                    Konsultasi Gratis
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Active navigation for section scrolling (only on home page)
    if (window.location.pathname === '/') {
        const sections = document.querySelectorAll("section[id]");
        const navLinks = document.querySelectorAll("nav a[href^='{{ route('home') }}#']");

        function activateNavLink() {
            let scrollY = window.pageYOffset;

            sections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                const sectionTop = current.offsetTop - 80; // header height
                const sectionId = current.getAttribute("id");

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove("text-blue-600", "border-b-2", "border-blue-600");
                        if (link.getAttribute("href").includes("#" + sectionId)) {
                            link.classList.add("text-blue-600", "border-b-2", "border-blue-600");
                        }
                    });
                }
            });
        }

        window.addEventListener("scroll", activateNavLink);
    }
});
</script>

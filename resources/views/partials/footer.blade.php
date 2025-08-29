<footer class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">JMC</span>
                    </div>
                    <span class="ml-3 text-xl font-bold">IT Consultant</span>
                </div>
                <p class="text-gray-300 mb-4 max-w-md">
                    Menyediakan solusi digital inovatif untuk meningkatkan efisiensi dan produktivitas bisnis Anda.
                    Dengan pengalaman bertahun-tahun, kami siap menjadi partner teknologi terpercaya.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-200">
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-200">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/muhammad-dzaky-aulia-al-ghazam-7472352a1/" class="text-gray-400 hover:text-blue-400 transition-colors duration-200">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/zaaacx__/" class="text-gray-400 hover:text-blue-400 transition-colors duration-200">
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-orange-400">Quick Links</h4>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('home') }}#home" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#layanan" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#portofolio" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Portofolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kontak') }}" class="text-gray-300 hover:text-white transition-colors duration-200">
                            Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-semibold mb-4 text-orange-400">Kontak Kami</h4>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt text-orange-400 w-5"></i>
                        <span class="ml-3 text-gray-300 text-sm">
                            Jl. Prapanca, Tegal Senggotan, Tirtonirmolo, Kec. Kasihan, Kabupaten Bantul<br>
                            Daerah Istimewa Yogyakarta 55184
                        </span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone text-orange-400 w-5"></i>
                        <span class="ml-3 text-gray-300 text-sm">
                            +62 812-2811-535
                        </span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-envelope text-orange-400 w-5"></i>
                        <span class="ml-3 text-gray-300 text-sm">
                            info@jmc.co.id
                        </span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-clock text-orange-400 w-5"></i>
                        <span class="ml-3 text-gray-300 text-sm">
                            Sen - Jum: 08:00 - 17:00
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Subscription -->
        <div class="mt-8 pt-8 border-t border-gray-700">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-lg font-semibold text-orange-400 mb-2">
                        Berlangganan Newsletter
                    </h4>
                    <p class="text-gray-300 text-sm">
                        Dapatkan update terbaru tentang teknologi dan tips bisnis
                    </p>
                </div>
                <form class="flex w-full md:w-auto">
                    <input type="email"
                           placeholder="Email Anda"
                           class="px-4 py-2 w-full md:w-64 text-gray-900 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button type="submit"
                            class="bg-orange-500 hover:bg-orange-600 px-6 py-2 rounded-r-lg transition-colors duration-200">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-8 pt-8 border-t border-gray-700 text-center">
            <p class="text-gray-400 text-sm">
                &copy; {{ date('Y') }} JMC IT Consultant. All rights reserved.
                <span class="mx-2">|</span>
                <a href="#" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
                <span class="mx-2">|</span>
                <a href="#" class="hover:text-white transition-colors duration-200">Terms of Service</a>
            </p>
        </div>
    </div>
</footer>

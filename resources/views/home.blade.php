@extends('layouts.app')

@section('title', 'JMC IT Consultant - Solusi Digital Inovatif')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="hero-bg min-h-screen flex items-center pt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-white space-y-6">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight drop-shadow-lg">
                        Tingkatkan Bisnis Anda dengan
                        <span class="text-orange-400 drop-shadow-lg">Aplikasi Inovatif</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-200 max-w-2xl drop-shadow-md">
                        Kerja Cepat, Hasil Tepat, Profit Meningkat Berkat Aplikasi yang Tepat
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="https://wa.me/628122811535"
                            class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105 flex items-center justify-center">
                            <i class="fab fa-whatsapp mr-2"></i>
                            Konsultasi Gratis
                        </a>
                        <a href="/kontak"
                            class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-3 rounded-full text-lg font-medium transition-all duration-300">
                            Jadwalkan Demo
                        </a>
                    </div>
                </div>

                <!-- Device Mockup -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative">
                        <div
                            class="w-80 h-96 bg-gray-900 rounded-2xl shadow-2xl p-4 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                            <div class="w-full h-full bg-white rounded-xl overflow-hidden">
                                <div class="bg-red-500 h-12 flex items-center justify-between px-4">
                                    <div class="flex space-x-2">
                                        <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                        <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                        <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                    </div>
                                    <span class="text-white text-xs font-medium">Dashboard</span>
                                </div>
                                <div class="p-4 space-y-3">
                                    <div class="flex justify-between items-center">
                                        <div class="h-4 bg-blue-200 rounded w-1/3"></div>
                                        <div class="h-4 bg-green-200 rounded w-1/4"></div>
                                    </div>
                                    <div class="h-24 bg-gradient-to-r from-blue-400 to-purple-500 rounded"></div>
                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="h-16 bg-orange-200 rounded"></div>
                                        <div class="h-16 bg-green-200 rounded"></div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="h-3 bg-gray-200 rounded w-full"></div>
                                        <div class="h-3 bg-gray-200 rounded w-3/4"></div>
                                        <div class="h-3 bg-gray-200 rounded w-1/2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Layanan Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Solusi teknologi lengkap untuk mengoptimalkan operasional bisnis Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($layanan as $service)
                    <div class="card-hover bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <i class="{{ $service['icon'] }} text-2xl text-white"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 mb-6">{{ $service['description'] }}</p>
                            <a href="{{ route('kontak') }}"
                                class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                                Pelajari Lebih Lanjut
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('kontak') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105">
                    Diskusikan Proyek Anda
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-white">
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">50+</div>
                    <div class="text-lg">Proyek Selesai</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">30+</div>
                    <div class="text-lg">Klien Puas</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">5+</div>
                    <div class="text-lg">Tahun Pengalaman</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold mb-2">24/7</div>
                    <div class="text-lg">Support</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Apa Kata Klien Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Kepuasan klien adalah prioritas utama kami
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pinimg.com/736x/19/16/71/191671ced290fff160c4e6c60a015e07.jpg" alt="Avatar"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold text-gray-900">Ahmad Budiman</div>
                            <div class="text-gray-600 text-sm">CEO, PT Maju Jaya</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "Sistem inventory yang dibuat JMC sangat membantu efisiensi operasional perusahaan kami. Highly
                        recommended!"
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pinimg.com/1200x/53/b8/95/53b8950245dd5dc6771a6a6bffeddd26.jpg" alt="Avatar"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold text-gray-900">Sari Pertiwi</div>
                            <div class="text-gray-600 text-sm">Owner, Toko Online Berkah</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "Platform e-commerce yang dikembangkan sangat user-friendly dan meningkatkan penjualan kami 200%!"
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pinimg.com/1200x/ef/3c/91/ef3c91597344f1e1c5842f6cfdf44097.jpg" alt="Avatar"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <div class="font-semibold text-gray-900">Rizki Hakim</div>
                            <div class="text-gray-600 text-sm">Manager IT, CV Sukses Mandiri</div>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">
                        "Dashboard analytics memberikan insight berharga untuk decision making. Tim JMC sangat profesional!"
                    </p>
                    <div class="flex text-yellow-400 mt-4">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Siap Mengembangkan Bisnis Anda?
            </h2>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                Konsultasikan kebutuhan teknologi bisnis Anda dengan tim ahli kami.
                Gratis dan tanpa komitmen!
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('kontak') }}"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105">
                    Konsultasi Sekarang
                </a>
                <a href="https://wa.me/628122811535"
                    class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105">
                    <i class="fab fa-whatsapp mr-2"></i>
                    WhatsApp Kami
                </a>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portofolio" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 ">
                    <a href="/portofolio"class="hover:text-blue-600 transition-colors duration-300">
                        Portofolio Kami &raquo;
                    </a>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Lihat berbagai proyek sukses yang telah kami kerjakan untuk klien
                </p>
            </div>

            <!-- Portfolio Slider -->
            <div class="relative max-w-6xl mx-auto">
                <!-- Slider Container -->
                <div class="portfolio-slider overflow-hidden rounded-2xl shadow-2xl">
                    <div class="portfolio-track flex transition-transform duration-500 ease-in-out" id="portfolioTrack">
                        @foreach ($portofolio as $index => $project)
                            <div class="portfolio-slide w-full flex-shrink-0">
                                <div class="bg-white rounded-2xl overflow-hidden h-full">
                                    <div class="grid grid-cols-1 lg:grid-cols-2 h-full min-h-[500px]">
                                        <!-- Image Section -->
                                        <div class="relative overflow-hidden">
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-purple-600/20 z-10">
                                            </div>
                                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}"
                                                class="w-full h-full object-cover transform hover:scale-110 transition-transform duration-700">
                                            <div class="absolute top-4 left-4 z-20">
                                                <span
                                                    class="bg-white/90 backdrop-blur-sm text-gray-800 px-3 py-1 rounded-full text-sm font-medium">
                                                    Proyek {{ $index + 1 }}
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Content Section -->
                                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                                            <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                                                {{ $project['title'] }}
                                            </h3>
                                            <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                                                {{ $project['description'] }}
                                            </p>

                                            <!-- Tech Stack -->
                                            <div class="mb-8">
                                                <h4
                                                    class="text-sm font-semibold text-gray-800 mb-3 uppercase tracking-wider">
                                                    Teknologi yang Digunakan
                                                </h4>
                                                <div class="flex flex-wrap gap-2">
                                                    @foreach ($project['tech'] as $tech)
                                                        <span
                                                            class="bg-gradient-to-r from-blue-500 to-purple-600 text-white text-sm px-4 py-2 rounded-full font-medium shadow-lg">
                                                            {{ $tech }}
                                                        </span>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <!-- CTA Button -->
                                            <div class="flex space-x-4">
                                                <a href="{{ route('kontak') }}"
                                                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-3 rounded-full font-medium transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center">
                                                    Diskusi Proyek Serupa
                                                    <i class="fas fa-arrow-right ml-2"></i>
                                                </a>
                                                <a href="https://wa.me/628122811535"
                                                    class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-medium transition-all duration-300 hover:scale-105 flex items-center">
                                                    <i class="fab fa-whatsapp mr-2"></i>
                                                    WhatsApp
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <button id="prevBtn"
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-800 w-12 h-12 rounded-full shadow-xl hover:shadow-2xl transition-all duration-300 z-20 flex items-center justify-center group">
                    <i class="fas fa-chevron-left group-hover:-translate-x-1 transition-transform duration-300"></i>
                </button>

                <button id="nextBtn"
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-800 w-12 h-12 rounded-full shadow-xl hover:shadow-2xl transition-all duration-300 z-20 flex items-center justify-center group">
                    <i class="fas fa-chevron-right group-hover:translate-x-1 transition-transform duration-300"></i>
                </button>

                <div class="flex justify-center mt-8 space-x-2" id="paginationDots">
                    @foreach ($portofolio as $index => $project)
                        <button
                            class="pagination-dot w-3 h-3 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-gradient-to-r from-blue-500 to-purple-600' : 'bg-gray-300' }}"
                            data-slide="{{ $index }}"></button>
                    @endforeach
                </div>

                <div class="mt-4 mx-auto max-w-md">
                    <div class="w-full bg-gray-200 rounded-full h-1">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 h-1 rounded-full transition-all duration-500"
                            id="progressBar" style="width: {{ 100 / count($portofolio) }}%"></div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">
                    Ingin melihat lebih banyak proyek kami atau mendiskusikan kebutuhan spesifik Anda?
                </p>
                <a href="{{ route('kontak') }}"
                    class="bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    Konsultasi Proyek Anda
                </a>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('portfolioTrack');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const dots = document.querySelectorAll('.pagination-dot');
            const progressBar = document.getElementById('progressBar');
            const totalSlides = {{ count($portofolio) }};
            let currentSlide = 0;

            function updateSlider() {
                track.style.transform = `translateX(-${currentSlide * 100}%)`;

                dots.forEach((dot, index) => {
                    if (index === currentSlide) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-gradient-to-r', 'from-blue-500', 'to-purple-600');
                    } else {
                        dot.classList.add('bg-gray-300');
                        dot.classList.remove('bg-gradient-to-r', 'from-blue-500', 'to-purple-600');
                    }
                });

                const progressWidth = ((currentSlide + 1) / totalSlides) * 100;
                progressBar.style.width = `${progressWidth}%`;
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateSlider();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateSlider();
            }

            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentSlide = index;
                    updateSlider();
                });
            });

            setInterval(nextSlide, 8000);
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });

            let startX = null;

            track.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
            });

            track.addEventListener('touchend', (e) => {
                if (!startX) return;

                const endX = e.changedTouches[0].clientX;
                const diffX = startX - endX;

                if (Math.abs(diffX) > 50) {
                    if (diffX > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }

                startX = null;
            });
        });
    </script>

    <style>

    </style>
@endsection

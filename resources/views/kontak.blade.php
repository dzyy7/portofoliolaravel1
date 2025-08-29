@extends('layouts.app')

@section('title', 'Kontak Kami - JMC IT Consultant')

@section('content')
    <!-- Contact Hero Section -->
    <section class="pt-24 pb-12 bg-gradient-to-r from-blue-600 to-purple-600">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Hubungi Kami
                </h1>
                <p class="text-lg md:text-xl text-blue-100 max-w-2xl mx-auto">
                    Siap membantu mewujudkan solusi digital terbaik untuk bisnis Anda
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">
                        Konsultasi Gratis
                    </h2>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('kontak.submit') }}" method="POST" class="space-y-6">
                        @csrf

                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Lengkap *
                            </label>
                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('nama') border-red-500 @enderror"
                                required>
                            @error('nama')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror"
                                required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Nomor Telepon
                            </label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div>
                            <label for="layanan" class="block text-sm font-medium text-gray-700 mb-2">
                                Layanan yang Diminati
                            </label>
                            <select id="layanan" name="layanan"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Layanan</option>
                                <option value="web-app" {{ old('layanan') == 'web-app' ? 'selected' : '' }}>Aplikasi Web
                                </option>
                                <option value="mobile-app" {{ old('layanan') == 'mobile-app' ? 'selected' : '' }}>Aplikasi
                                    Mobile</option>
                                <option value="erp-system" {{ old('layanan') == 'erp-system' ? 'selected' : '' }}>Sistem ERP
                                </option>
                                <option value="consultation" {{ old('layanan') == 'consultation' ? 'selected' : '' }}>
                                    Konsultasi IT</option>
                                <option value="other" {{ old('layanan') == 'other' ? 'selected' : '' }}>Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label for="pesan" class="block text-sm font-medium text-gray-700 mb-2">
                                Pesan / Deskripsi Proyek *
                            </label>
                            <textarea id="pesan" name="pesan" rows="5"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('pesan') border-red-500 @enderror"
                                placeholder="Ceritakan tentang proyek atau kebutuhan Anda..." required>{{ old('pesan') }}</textarea>
                            @error('pesan')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full bg-orange-500 hover:bg-orange-600 text-white py-3 px-6 rounded-lg font-medium transition-all duration-300 hover:scale-105">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <!-- Contact Cards -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            Informasi Kontak
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Alamat Kantor</div>
                                    <div class="text-gray-600 text-sm">
                                        Jl. Prapanca, Tegal Senggotan, Tirtonirmolo, Kec. Kasihan, Kabupaten Bantul<br>
                                        Daerah Istimewa Yogyakarta 55184
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-phone text-green-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Telepon</div>
                                    <div class="text-gray-600 text-sm">+62 812-2811-535</div>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-envelope text-orange-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Email</div>
                                    <div class="text-gray-600 text-sm">info@jmc.co.id</div>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <i class="fas fa-clock text-purple-600"></i>
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900">Jam Operasional</div>
                                    <div class="text-gray-600 text-sm">
                                        Senin - Jumat: 08:00 - 17:00<br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Contact Buttons -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            Kontak Langsung
                        </h3>
                        <div class="space-y-3">
                            <a href="https://wa.me/628122811535"
                                class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-lg font-medium transition-all duration-300">
                                <i class="fab fa-whatsapp mr-2 text-xl"></i>
                                WhatsApp Chat
                            </a>

                            <a href="tel:+628122811535"
                                class="flex items-center justify-center w-full bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-lg font-medium transition-all duration-300">
                                <i class="fas fa-phone mr-2"></i>
                                Telepon Sekarang
                            </a>

                            <a href="mailto:info@jmc.co.id"
                                class="flex items-center justify-center w-full bg-gray-600 hover:bg-gray-700 text-white py-3 px-6 rounded-lg font-medium transition-all duration-300">
                                <i class="fas fa-envelope mr-2"></i>
                                Kirim Email
                            </a>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-4">
                            FAQ Singkat
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <div class="font-medium text-gray-900 mb-1">
                                    Berapa lama proses pengembangan?
                                </div>
                                <div class="text-gray-600 text-sm">
                                    Tergantung kompleksitas, biasanya 2-8 minggu untuk aplikasi sederhana hingga menengah.
                                </div>
                            </div>

                            <div>
                                <div class="font-medium text-gray-900 mb-1">
                                    Apakah ada garansi?
                                </div>
                                <div class="text-gray-600 text-sm">
                                    Ya, kami memberikan garansi bug fixing selama 3 bulan setelah delivery.
                                </div>
                            </div>

                            <div>
                                <div class="font-medium text-gray-900 mb-1">
                                    Bagaimana sistem pembayaran?
                                </div>
                                <div class="text-gray-600 text-sm">
                                    Pembayaran bertahap sesuai milestone proyek yang disepakati.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                    Lokasi Kantor Kami
                </h2>
                <p class="text-gray-600">
                    Kunjungi kantor kami untuk konsultasi langsung
                </p>
            </div>

            <!-- Google Maps Embed -->
            <div class="rounded-2xl overflow-hidden shadow-lg h-96">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.744769324396!2d110.34711557484466!3d-7.816818492203836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577faf968e75%3A0x2f1089d3e54a4fdb!2sJMC%20Indonesia!5e0!3m2!1sid!2sid!4v1756384755376!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>


    @push('scripts')
        <script>
            // Form validation and enhancement
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.querySelector('form');
                const inputs = form.querySelectorAll('input, textarea, select');

                // Add focus/blur animations
                inputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('focused');
                    });

                    input.addEventListener('blur', function() {
                        if (!this.value) {
                            this.parentElement.classList.remove('focused');
                        }
                    });
                });

                // Form submission with loading state
                form.addEventListener('submit', function(e) {
                    const submitBtn = form.querySelector('button[type="submit"]');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Mengirim...';
                    submitBtn.disabled = true;
                });
            });
        </script>
    @endpush

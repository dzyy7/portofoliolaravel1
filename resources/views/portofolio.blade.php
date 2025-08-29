@extends('layouts.app')

@section('title', 'Portofolio - JMC IT Consultant')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 via-blue-700 to-purple-800 pt-24 pb-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
                    Portofolio <span class="text-yellow-400">Kami</span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 leading-relaxed">
                    Lihat berbagai proyek sukses yang telah kami kerjakan dengan teknologi modern dan solusi inovatif
                </p>
                <div class="flex items-center justify-center space-x-8 text-blue-200">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white">50+</div>
                        <div class="text-sm">Proyek Selesai</div>
                    </div>
                    <div class="w-px h-12 bg-blue-400"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white">5+</div>
                        <div class="text-sm">Tahun Pengalaman</div>
                    </div>
                    <div class="w-px h-12 bg-blue-400"></div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white">100%</div>
                        <div class="text-sm">Client Puas</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Proyek Terbaru Kami
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Setiap proyek adalah cerminan dedikasi kami untuk memberikan solusi digital terbaik
                </p>
            </div>

            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                @foreach ($portofolio as $project)
                    <div class="portfolio-item group bg-white rounded-3xl shadow-sm hover:shadow-2xl overflow-hidden border border-gray-100"
                        data-category="{{ $project['category'] }}">

                        <!-- Image Container -->
                        <div class="relative overflow-hidden">
                            <div class="h-64 bg-cover bg-center group-hover:scale-105 transition-transform duration-700"
                                style="background-image: url('{{ $project['image'] }}')">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <div class="absolute bottom-6 left-6 right-6">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-blue-500/90 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold">
                                            {{ $project['category'] }}
                                        </span>
                                        <span class="bg-green-500/90 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold">
                                            {{ $project['status'] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <!-- Header -->
                            <div class="flex items-start justify-between mb-4">
                                <h3 class="text-2xl font-bold text-gray-900 leading-tight">{{ $project['title'] }}</h3>
                                <span class="text-blue-600 text-sm font-semibold bg-blue-50 px-3 py-1 rounded-full">{{ $project['year'] }}</span>
                            </div>

                            <!-- Description -->
                            <p class="text-gray-600 mb-6 leading-relaxed">{{ Str::limit($project['description'], 120) }}</p>

                            <!-- Tech Stack -->
                            <div class="flex flex-wrap gap-2 mb-6">
                                @foreach ($project['tech'] as $tech)
                                    <span class="bg-gray-100 text-gray-700 text-xs px-3 py-2 rounded-lg font-medium border">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Footer -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div>
                                    <p class="text-xs text-gray-500 uppercase tracking-wide mb-1">Client</p>
                                    <p class="font-semibold text-gray-900">{{ $project['client'] }}</p>
                                </div>
                                <a href="{{ route('portofolio.detail', $project['id']) }}"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-gray-900 via-blue-900 to-gray-900 text-white relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, white 1px, transparent 0); background-size: 50px 50px;"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Siap Memulai Proyek <span class="text-yellow-400">Impian Anda?</span>
                </h2>
                <p class="text-xl text-gray-300 mb-12 leading-relaxed">
                    Mari wujudkan ide brilian Anda menjadi solusi digital yang mengagumkan. Tim ahli kami siap mendampingi perjalanan transformasi digital bisnis Anda.
                </p>

                <!-- Features -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Konsultasi Gratis</h3>
                        <p class="text-gray-400">Diskusi mendalam tentang kebutuhan bisnis Anda</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-green-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Kualitas Terjamin</h3>
                        <p class="text-gray-400">Solusi berkualitas tinggi dengan standar internasional</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Support 24/7</h3>
                        <p class="text-gray-400">Dukungan penuh selama dan setelah pengembangan</p>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('kontak') }}"
                        class="bg-orange-500 hover:bg-orange-600 text-white px-10 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                        Mulai Konsultasi
                    </a>
                    <a href="https://wa.me/628122811535"
                        class="bg-green-500 hover:bg-green-600 text-white px-10 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                        <svg class="w-6 h-6 inline mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488z"/>
                        </svg>
                        Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

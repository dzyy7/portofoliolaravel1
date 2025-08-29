@extends('layouts.app')

@section('title', 'Portofolio - JMC IT Consultant')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 pt-24 pb-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Portofolio Kami
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                    Lihat berbagai proyek sukses yang telah kami kerjakan dengan berbagai teknologi modern
                </p>
            </div>
        </div>
    </section>



    <!-- Portfolio Grid -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($portofolio as $project)
                    <div class="portfolio-item card-hover bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300"
                        data-category="{{ $project['category'] }}">
                        <div class="relative group">
                            <div class="h-64 bg-cover bg-center transform transition-transform duration-300 group-hover:scale-110"
                                style="background-image: url('{{ $project['image'] }}')">
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <div class="absolute bottom-4 left-4 right-4">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $project['category'] }}
                                        </span>
                                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $project['status'] }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">{{ $project['title'] }}</h3>
                                <span class="text-gray-500 text-sm">{{ $project['year'] }}</span>
                            </div>

                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $project['description'] }}</p>

                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach ($project['tech'] as $tech)
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-medium">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500">Client:</p>
                                    <p class="font-medium text-gray-900">{{ $project['client'] }}</p>
                                </div>
                                <a href="{{ route('portofolio.detail', $project['id']) }}"
                                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-all duration-300 hover:scale-105">
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
    <section class="py-16 bg-gray-900 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Tertarik dengan Proyek Kami?
            </h2>
            <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                Mari diskusikan proyek impian Anda. Kami siap membantu mewujudkan solusi digital terbaik untuk bisnis Anda.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('kontak') }}"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105">
                    Konsultasi Proyek
                </a>
                <a href="https://wa.me/628122811535"
                    class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-full text-lg font-medium transition-all duration-300 hover:scale-105">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => {
                        b.classList.remove('active', 'bg-blue-600', 'text-white');
                        b.classList.add('bg-white', 'text-gray-700', 'border',
                            'border-gray-200');
                    });

                    // Add active class to clicked button
                    this.classList.add('active', 'bg-blue-600', 'text-white');
                    this.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-200');

                    const category = this.getAttribute('data-category');

                    portfolioItems.forEach(item => {
                        if (category === 'all' || item.getAttribute('data-category') ===
                            category) {
                            item.style.display = 'block';
                            item.classList.add('animate-fade-in');
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('animate-fade-in');
                        }
                    });
                });
            });
        });
    </script>

    <style>
        .animate-fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection

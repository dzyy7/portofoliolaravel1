@extends('layouts.app')

@section('title', $project['title'] . ' - Portofolio JMC IT Consultant')

@section('content')
    <!-- Project Hero -->
    <section class="pt-24 pb-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="mb-8">
                    <ol class="flex items-center space-x-4 text-sm">
                        <li>
                            <a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600">Home</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <a href="{{ route('portofolio') }}" class="text-gray-500 hover:text-blue-600">Portofolio</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                            <span class="text-gray-900 font-medium">{{ $project['title'] }}</span>
                        </li>
                    </ol>
                </nav>

                <!-- Project Header -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                    <div class="h-96 bg-cover bg-center" style="background-image: url('{{ $project['image'] }}')">
                        <div class="h-full bg-gradient-to-t from-black/50 to-transparent flex items-end">
                            <div class="p-8 text-white">
                                <div class="flex items-center space-x-4 mb-4">
                                    <span class="bg-blue-600 px-4 py-2 rounded-full text-sm font-medium">
                                        {{ $project['category'] }}
                                    </span>
                                    <span class="bg-green-600 px-4 py-2 rounded-full text-sm font-medium">
                                        {{ $project['status'] }}
                                    </span>
                                </div>
                                <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $project['title'] }}</h1>
                                <p class="text-xl text-gray-200 max-w-2xl">{{ $project['description'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Details -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Main Content -->
                    <div class="lg:col-span-2 space-y-8">
                        <!-- Project Overview -->
                        <div class="bg-gray-50 rounded-2xl p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Project Overview</h2>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                {{ $project['description'] }} Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <!-- Technologies Used -->
                        <div class="bg-gray-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Technologies Used</h3>
                            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                                @foreach ($project['tech'] as $tech)
                                    <div class="bg-white p-4 rounded-xl border border-gray-200 text-center">
                                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                            <i class="fas fa-code text-blue-600 text-xl"></i>
                                        </div>
                                        <span class="font-medium text-gray-900">{{ $tech }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Features -->
                        <div class="bg-gray-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6">Key Features</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <i class="fas fa-check text-green-600 text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 mb-1">Responsive Design</h4>
                                        <p class="text-gray-600 text-sm">Optimized for all devices</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <i class="fas fa-check text-green-600 text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 mb-1">User Authentication</h4>
                                        <p class="text-gray-600 text-sm">Secure login system</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <i class="fas fa-check text-green-600 text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 mb-1">Real-time Updates</h4>
                                        <p class="text-gray-600 text-sm">Live data synchronization</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <div class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center mt-1">
                                        <i class="fas fa-check text-green-600 text-sm"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-gray-900 mb-1">Analytics Dashboard</h4>
                                        <p class="text-gray-600 text-sm">Comprehensive reporting</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="space-y-6">
                        <!-- Project Info -->
                        <div class="bg-gray-50 rounded-2xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-6">Project Info</h3>
                            <div class="space-y-4">
                                <div>
                                    <span class="text-gray-600 text-sm">Client</span>
                                    <p class="font-medium text-gray-900">{{ $project['client'] }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600 text-sm">Category</span>
                                    <p class="font-medium text-gray-900">{{ $project['category'] }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600 text-sm">Year</span>
                                    <p class="font-medium text-gray-900">{{ $project['year'] }}</p>
                                </div>
                                <div>
                                    <span class="text-gray-600 text-sm">Status</span>
                                    <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                                        {{ $project['status'] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Contact CTA -->
                        <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl p-6 text-white text-center">
                            <h3 class="text-xl font-bold mb-4">Interested in Similar Project?</h3>
                            <p class="text-blue-100 mb-6">Let's discuss your project requirements</p>
                            <div class="space-y-3">
                                <a href="{{ route('kontak') }}"
                                   class="block bg-white text-blue-600 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition-colors duration-300">
                                    Get Quote
                                </a>
                                <a href="https://wa.me/628122811535"
                                   class="block bg-green-500 hover:bg-green-600 px-6 py-3 rounded-full font-medium transition-colors duration-300">
                                    <i class="fab fa-whatsapp mr-2"></i>
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    @if(count($relatedProjects) > 0)
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Related Projects
                    </h2>
                    <p class="text-lg text-gray-600">
                        Check out other projects we've worked on
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($relatedProjects as $related)
                        <div class="card-hover bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="h-48 bg-cover bg-center" style="background-image: url('{{ $related['image'] }}')">
                            </div>
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-3">
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">
                                        {{ $related['category'] }}
                                    </span>
                                    <span class="text-gray-500 text-sm">{{ $related['year'] }}</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $related['title'] }}</h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ $related['description'] }}</p>
                                <a href="{{ route('portofolio.detail', $related['id']) }}"
                                   class="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium">
                                    View Project
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection

@section('scripts')
<style>

</style>
@endsection

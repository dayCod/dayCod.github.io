@extends('_layouts.main')

@section('body')
    <div class="px-5 py-8">

        {{-- Hero Section --}}
        <section data-section="hero">
            <h1 class="text-lg font-bold text-gray-400/75 text-center mb-10">Daycode</h1>
            <div
                class="bg-gray-100/50 w-full h-[35rem] text-center flex flex-col items-center justify-center rounded-xl gap-8 px-5">
                <div class="max-w-4xl text-black">
                    <p class="text-2xl md:text-3xl lg:text-4xl" data-aos="fade-up" data-aos-delay="100">
                        Wirandra <small class="text-sm">(ウィランドラ)</small> is a web developer, experienced in collaborating with startups, digital agencies, and global enterprises to build scalable web applications.
                    </p>
                </div>
                <div class="max-w-4xl flex items-center justify-center gap-4">
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=daycodestudioproject@gmail.com"
                        class="flex-none rounded-full bg-black w-10 h-10 text-white flex items-center justify-center p-0 transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110"
                        target="_blank">
                        <i class="bx bx-envelope text-xl m-auto"></i>
                    </a>
                    <a href="https://github.com/dayCod"
                        class="flex-none rounded-full bg-black w-10 h-10 text-white flex items-center justify-center p-0 transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110"
                        target="_blank">
                        <i class="bx bxl-github text-xl m-auto"></i>
                    </a>
                    <a href="#package-creations"
                        class="text-xs rounded-full bg-black w-full h-10 text-white flex items-center justify-center px-8 transition duration-300 ease-in-out sm:text-sm md:text-base hover:-translate-y-1 hover:scale-110">
                        Use my packages
                    </a>
                </div>
            </div>
        </section>

        {{-- Creation Section --}}
        <section data-section="creation" class="pt-12">
            <div class="container mx-auto px-4">
                <h1 class="text-lg font-bold text-gray-400/75 text-center mb-10" id="package-creations">Creations</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    @foreach ($page->packages as $package)
                        <div
                            class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                            <div class="p-6">
                                <div class="mb-4">
                                    <h3 class="text-xl font-bold text-black">{{ $package['fields']['package_name'] }}</h3>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    {{ $package['fields']['package_description'] }}
                                </p>
                                <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                    <div class="flex items-center mb-2">
                                        <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                        <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                    </div>
                                    <div class="bg-white p-2 rounded">
                                        <code class="text-gray-800 font-mono text-sm">$ {{ $package['fields']['package_composer_link'] }}</code>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-sm text-gray-500">{{ $package['fields']['package_version'] }}</span>
                                    <a href="{{ $package['fields']['reference_link'] }}" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Sketch</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Schema-first generator that transforms YAML blueprints into clean, structured code following the service repository pattern.
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require daycode/sketch</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v2.0.0</span>
                                <a href="https://github.com/dayCod/sketch" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Auditor</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Auditor provides a way to track changes made to your models, enabling you to maintain a detailed record of data modifications
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require rembon/laravel-auditor</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v2.0.2</span>
                                <a href="https://github.com/Rembonnn/laravel-auditor" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Stup Image</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Stup Image is a Package For Storing / Updating the Images, More Clear Codes and Upgrade Readability. Integrated with Intervention Image Library
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require daycode/stup-images</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.2.1</span>
                                <a href="https://github.com/dayCod/laravel-stup-images" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Deepseek Laravel Wrapper</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Laravel wrapper for Deepseek PHP client to seamless deepseek AI API integration with Laravel applications.
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require mattel-limbo/deepseek-laravel-wrapper</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.0.0</span>
                                <a href="https://github.com/Mattel-Limbo/deepseek-laravel-wrapper" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Pulsewave</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Pulsewave is a lightweight Python scaffolding designed for developing REST APIs with simplicity and flexibility.
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ open github.com/Rembonnn/pulsewave</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.0.0</span>
                                <a href="https://github.com/Rembonnn/pulsewave" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Sync Collection</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Synchronize your laravel collection whether you are using single or associative. This provides a simple way to sync your collection.
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require rembon/sync-collection</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.0.1</span>
                                <a href="https://github.com/Rembonnn/sync-collection" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Charable</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Get expected return value from char such as Alphabetic, Alphanumeric, Digit, Upper and Lower Case
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require daycode/charable</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.0.1</span>
                                <a href="https://github.com/dayCod/laravel-charable" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div>
                    
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Artisan Backup</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Laravel Artisan Backup is Package for Backup The Database, Super Fast and Easy with Artisan Backup.
                            </p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require daycode/artisan-backup</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.0.0</span>
                                <a href="https://github.com/dayCod/laravel-artisan-backup" class="text-black font-medium hover:text-gray-700 transition-colors" target="_blank">View on GitHub →</a>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        {{-- Article Section --}}
        <section data-section="article" class="pt-12">
            <div class="container mx-auto px-4">
                <h1 class="text-lg font-bold text-gray-400/75 text-center mb-10">Writings</h1>

                <div class="space-y-10">

                    <article class="border-b border-gray-100 pb-10" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row md:items-baseline gap-4">
                            <span class="text-xs text-gray-500 font-mono tracking-wider">May 23, 2025</span>
                            <a href="/article/laravel-idempotency-key-safe-requests" class="text-3xl italic text-gray-900 hover:text-gray-700 transition-colors duration-300 font-quicksand">
                                Idempotency Key for Safe Requests
                            </a>
                        </div>
                    </article>

                    <article class="border-b border-gray-100 pb-10" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row md:items-baseline gap-4">
                            <span class="text-xs text-gray-500 font-mono tracking-wider">May 10, 2025</span>
                            <a href="/article/unlocking-laravel-magic-mastering-pipelines" class="text-3xl italic text-gray-900 hover:text-gray-700 transition-colors duration-300 font-quicksand">
                                Unlocking Laravel Magic: Mastering Pipelines Easily
                            </a>
                        </div>
                    </article>

                    <article class="border-b border-gray-100 pb-10" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row md:items-baseline gap-4">
                            <span class="text-xs text-gray-500 font-mono tracking-wider">May 9, 2025</span>
                            <a href="/article/concurrency-made-simple" class="text-3xl italic text-gray-900 hover:text-gray-700 transition-colors duration-300 font-quicksand">
                                Unlocking Laravel Magic: Concurrency Made Simple
                            </a>
                        </div>
                    </article>

                    <article class="border-b border-gray-100 pb-10" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row md:items-baseline gap-4">
                            <span class="text-xs text-gray-500 font-mono tracking-wider">May 6, 2025</span>
                            <a href="/article/unlocking-laravel-magic-app-resolve-tap" class="text-3xl italic text-gray-900 hover:text-gray-700 transition-colors duration-300 font-quicksand">
                                Unlocking Laravel Magic: The Power of app(), resolve(), and tap()
                            </a>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        {{-- Footer Section --}}
        <footer class="pt-16">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <p class="text-sm text-gray-500">© {{ date('Y') }} Wirandra Alaya. All rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
@endsection

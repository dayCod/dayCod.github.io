@extends('_layouts.main')

@section('body')
    <div class="px-5 py-8">

        {{-- Hero Section --}}
        <section data-section="hero">
            <h1 class="text-lg font-bold text-gray-300/75 text-center mb-10">Daycode</h1>
            <div
                class="bg-gray-100/50 w-full h-[35rem] text-center flex flex-col items-center justify-center rounded-xl gap-8 px-5">
                <div class="max-w-4xl text-black">
                    <p class="text-2xl md:text-3xl lg:text-4xl" data-aos="fade-up" data-aos-delay="100">
                        Wirandra <small class="text-sm">(ウィランドラ)</small> is a web developer, specialize in laravel/php development, collaborating with startups, digital agencies, and global enterprises to build scalable web applications. also: cartoon fan, book reader and chess player :).
                    </p>
                </div>
                <div class="max-w-4xl flex items-center justify-center gap-4">
                    <a href="#"
                        class="flex-none rounded-full bg-black w-10 h-10 text-white flex items-center justify-center p-0 transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                        <i class="bx bx-envelope text-xl m-auto"></i>
                    </a>
                    <a href="#"
                        class="flex-none rounded-full bg-black w-10 h-10 text-white flex items-center justify-center p-0 transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                        <i class="bx bxl-github text-xl m-auto"></i>
                    </a>
                    <a href="#"
                        class="text-xs rounded-full bg-black w-full h-10 text-white flex items-center justify-center px-8 transition duration-300 ease-in-out sm:text-sm md:text-base hover:-translate-y-1 hover:scale-110">
                        Use my packages
                    </a>
                </div>
            </div>
        </section>

        {{-- Creation Section --}}
        <section data-section="creation" class="pt-12">
            <div class="container mx-auto px-4">
                <h1 class="text-lg font-bold text-gray-400/75 text-center mb-10">Creations</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Package Card 1 -->
                    <div
                        class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-black">Laravel Package 1</h3>
                            </div>
                            <p class="text-gray-700 mb-4">A powerful Laravel package that enhances your application with
                                amazing features.</p>
                            <div class="bg-gray-100 rounded-lg p-3 mb-4 border border-gray-200 shadow-sm">
                                <div class="flex items-center mb-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500 mr-2"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500 mr-2"></div>
                                </div>
                                <div class="bg-white p-2 rounded">
                                    <code class="text-gray-800 font-mono text-sm">$ composer require dayCod/sketch</code>
                                </div>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500">v1.0.0</span>
                                <a href="#" class="text-black font-medium hover:text-gray-700 transition-colors">View
                                    on GitHub →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Article Section --}}
        <section data-section="article" class="pt-12">
            <div class="container mx-auto px-4">
                <h1 class="text-lg font-bold text-gray-400/75 text-center mb-10">Writings</h1>

                <div class="space-y-10">
                    <!-- Article 1 -->
                    <article class="border-b border-gray-100 pb-10" data-aos="fade-up">
                        <div class="flex flex-col md:flex-row md:items-baseline gap-4">
                            <span class="text-xs text-gray-500 font-mono tracking-wider">May 5, 2025</span>
                            <a href="#" class="text-3xl italic text-gray-900 hover:text-gray-700 transition-colors duration-300 font-quicksand">
                                The Art of Minimalist Design
                            </a>
                        </div>
                    </article>
                </div>

                <div class="text-center mt-10" data-aos="fade-up">
                    <a href="#" class="inline-block px-6 py-2 rounded-full bg-black text-white transition duration-300 ease-in-out hover:-translate-y-1 hover:scale-110">
                        View All Writings
                    </a>
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

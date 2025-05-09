@extends('_layouts.main')

@section('seo-title')
    Unlocking Laravel Magic: Concurrency Made Simple
@endsection

@section('seo-description')
    Learn how Laravel handles concurrency using locks, queues, and the new Laravel 12 Concurrency facade to build safe and scalable applications.
@endsection

@section('seo-keywords')
    Laravel concurrency
@endsection

@section('body')
    <div class="px-5 py-8">

        {{-- Banner Section --}}
        <section data-section="banner">
            <div class="flex justify-between">
                <a href="/"
                    class="text-black font-medium bg-gray-100 rounded-full w-8 h-8 flex items-center justify-center hover:text-gray-700 transition-colors">
                    <i class="bx bx-arrow-back"></i>
                </a>
                <h1 class="text-lg font-bold text-gray-400/75 mb-10">Daycode</h1>
                <div></div>
            </div>
            <div
                class="bg-gray-100/50 w-full h-[20rem] text-center flex flex-col items-center justify-center rounded-xl gap-8 px-5 py-10">
                <div class="max-w-4xl text-black">
                    <p class="text-2xl md:text-3xl lg:text-4xl" data-aos="fade-up" data-aos-delay="100">
                        Unlocking Laravel Magic: Concurrency Made Simple
                    </p>
                </div>
            </div>
        </section>

        {{-- Articles Section --}}
        <section data-section="content" class="pt-12">
            <div class="prose max-w-4xl mx-auto">
                <div class="markdown-style">
                    {!! \Illuminate\Support\Str::of(file_get_contents("https://github.com/dayCod/personal-article/blob/main/concurrency-made-simple/content.md?raw=true"))->markdown() !!}
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
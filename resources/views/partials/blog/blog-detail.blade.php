@extends('layouts.app')

@section('content')
<section class="bg-gray-900 min-h-screen py-16">
    <div class="max-w-4xl mx-auto px-5">
        
        <!-- Back Button -->
        <a href="{{ route('blog') }}" class="inline-flex items-center text-indigo-400 hover:text-indigo-300 mb-8 transition-colors">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Kembali ke Blog
        </a>

        <!-- Article Header -->
        <div class="mb-8">
            <div class="bg-purple-500 inline-flex items-center px-4 py-2 leading-none rounded-full text-sm font-medium uppercase text-white mb-4">
                <span>{{ $campaign->brand->industri }}</span>
            </div>
            
            <h1 class="font-[poppins] text-4xl md:text-5xl font-extrabold text-white mb-4">
                {{ $campaign->judul }}
            </h1>
            
            <div class="flex items-center text-gray-400 text-sm">
                <span class="font-medium">by</span>
                <a href="#" class="mx-2 text-indigo-400 hover:text-indigo-300 underline font-medium">
                    {{ $campaign->brand->nama_brand }}
                </a>
                <span class="mx-2">·</span>
                <span>{{ $campaign->created_at->format('d F Y') }}</span>
            </div>
        </div>

        <!-- Featured Image -->
        <div class="mb-10 rounded-2xl overflow-hidden">
            <img src="{{ asset('storage/' . $campaign->path_img) }}" 
                 alt="{{ $campaign->judul }}" 
                 class="w-full h-auto object-cover max-h-[500px]">
        </div>

        <!-- Article Content -->
        <article class="prose prose-invert prose-lg max-w-none">
            <div class="text-gray-300 leading-relaxed space-y-6">
                <p class="text-xl text-gray-400 font-medium mb-8">
                    {{ $campaign->deskripsi }}
                </p>

                <!-- Add more content sections as needed -->
                <div class="bg-gray-800 border border-gray-700 rounded-xl p-6 my-8">
                    <h3 class="text-xl font-bold text-white mb-3">Tentang Campaign Ini</h3>
                    <p class="text-gray-400">
                        Campaign ini merupakan kolaborasi antara brand {{ $campaign->brand->nama_brand }} 
                        yang bergerak di industri {{ $campaign->brand->industri }}. 
                    </p>
                </div>

                @if($campaign->brand->deskripsi)
                <div class="mt-8">
                    <h3 class="text-2xl font-bold text-white mb-4">Tentang Brand</h3>
                    <p class="text-gray-400">{{ $campaign->brand->deskripsi }}</p>
                </div>
                @endif
            </div>
        </article>

        <!-- Share Section -->
        <div class="mt-12 pt-8 border-t border-gray-700">
            <p class="text-gray-400 mb-4">Bagikan artikel ini:</p>
            <div class="flex space-x-4">
                <a href="#" class="bg-gray-800 hover:bg-indigo-600 text-white px-6 py-2 rounded-lg transition-colors">
                    Facebook
                </a>
                <a href="#" class="bg-gray-800 hover:bg-indigo-600 text-white px-6 py-2 rounded-lg transition-colors">
                    Twitter
                </a>
                <a href="#" class="bg-gray-800 hover:bg-indigo-600 text-white px-6 py-2 rounded-lg transition-colors">
                    LinkedIn
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
<section class="border-t border-gray-700 text-gray-400 bg-gray-900 body-font" {!! $attributes ?? '' !!}>
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row min-h-[100px]">
        <a href="#_" class="flex items-center font-medium text-white select-none logo">
            <img src="{{ asset('logo/logo.png') }}" alt="Logo" class="h-10 w-auto object-contain">
        </a>
        <p class="font-[inter] mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-700 sm:mt-0">
            &copy; {{ date('Y') }} AdnFryl - Influencer Marketing Platform <br>
            +6281234567890
        </p>
        <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
            @php
            $socialLinks = [
            ['name' => 'facebook', 'url' => '#', 'icon' => 'heroicon-o-academic-cap'], // Ganti dengan ikon Heroicon yang sesuai
            ['name' => 'instagram', 'url' => '#', 'icon' => 'heroicon-o-camera'],
            ['name' => 'twitter', 'url' => '#', 'icon' => 'heroicon-o-bolt'],
            ['name' => 'linkedin', 'url' => '#', 'icon' => 'heroicon-o-link'],
            ['name' => 'tiktok', 'url' => '#', 'icon' => 'heroicon-o-musical-note'],
            ];
            @endphp

            @foreach($socialLinks as $link)
            <a href="{{ $link['url'] }}" class="text-gray-500 hover:text-indigo-400 transition-colors duration-200" aria-label="{{ ucfirst($link['name']) }}">
                <x-dynamic-component
                    :component="$link['icon']"
                    class="w-6 h-6"
                    aria-hidden="true" />
            </a>
            @endforeach
        </span>
    </div>
</section>
<section class="py-20 bg-gray-800">
    <div data-aos="fade-up" class="max-w-6xl px-6 mx-auto">
        <div class="grid gap-12 {{ $gridColumns() }} text-center">
            @foreach($items as $stat)
            <div class="space-y-2 transform transition-all duration-300 hover:scale-105">
                <h3 class="text-5xl md:text-6xl font-bold {{ $colorClass() }} font-[poppins]">
                    {{ $stat['number'] }}
                </h3>
                <p class="text-xl font-semibold text-white font-[poppins]">
                    {{ $stat['title'] }}
                </p>
                <p class="text-sm text-gray-400 font-[inter]">
                    {{ $stat['description'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
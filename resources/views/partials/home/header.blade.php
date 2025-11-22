<section class="px-2 md:min-h-screen bg-gray-900 md:px-0 pt-15">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div class="font-[poppins] w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                        <span class="block xl:inline">Bangun Kolaborasi Tepat</span>
                        <span class="block text-indigo-400 xl:inline">Hasil Maksimal!</span>
                    </h1>
                    <p class="font-[inter] mx-auto text-base text-gray-400 sm:max-w-md lg:text-xl md:max-w-3xl">
                        Kami bantu brand terhubung dengan influencer yang benar-benar relevan - meningkatkan awareness, engagement, dan penjualan.
                    </p>
                    <div class="relative flex flex-col sm:flex-row sm:space-x-4">

                        <!-- Primary Button -->
                        <x-link url="#" text="Mulai Promosi" style="gap-2 px-6 py-3 text-lg font-semibold text-white bg-indigo-600 hover:bg-indigo-700 transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg" >
                            <x-heroicon-s-arrow-right class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" />
                        </x-link>

                        <!-- Secondary Button -->
                        <x-link url="{{ route('layanan') }}" text="Pelajari Lebih Lanjut" style="px-6 py-3 text-lg font-semibold text-gray-300 bg-gray-800 hover:bg-gray-700 hover:text-white transition-all duration-300 ease-in-out border border-gray-700 hover:border-gray-600" />
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden">
                    <img src="{{ asset('ilustrations/influencer_hero.png') }}" 
                         alt="Influencer Logo" 
                         class="w-150 h-150">
                </div>
            </div>
        </div>
    </div>
</section>
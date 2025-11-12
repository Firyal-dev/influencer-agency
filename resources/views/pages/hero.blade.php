<section class="px-2 md:min-h-screen bg-gray-900 md:px-0 pt-15">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div class="font-[poppins] w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                    <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                        <span class="block xl:inline">Bangun Kolaborasi Tepat</span>
                        <span class="block text-indigo-400 xl:inline" data-primary="indigo-400">Hasil Maksimal!</span>
                    </h1>
                    <p class="font-[inter] mx-auto text-base text-gray-400 sm:max-w-md lg:text-xl md:max-w-3xl">Kami bantu brand terhubung dengan influencer yang benar-benar relevan - meningkatkan awareness, engagement, dan penjualan.</p>
                    <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                        <a href="#_" class="gap-2 flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto" data-primary="indigo-600" data-rounded="rounded-md">
                            Mulai Promosi
                            <x-heroicon-s-arrow-right class="w-4 h-4" />
                        </a>
                        <a href="#_" class="flex items-center px-6 py-3 text-gray-300 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white" data-rounded="rounded-md">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden">
                    <dotlottie-wc src="https://lottie.host/fdb62558-33c0-4809-a92a-b5759f86d315/XHHxJUCEs6.lottie" class="w-150 h-150" autoplay loop></dotlottie-wc>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.kenapakami')
@include('partials.stats')
@include('partials.testimonials')

@push('scripts')
<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js" type="module"></script>
@endpush
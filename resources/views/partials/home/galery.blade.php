@php
$activeCampaigns = $campaigns->filter(fn($c) => $c->status === 'aktif' && !empty($c->path_img));
@endphp

@if($activeCampaigns->count() > 0)
<section class="px-2 py-16 bg-gray-900 md:px-0">
    <div class="container max-w-6xl px-8 mx-auto xl:px-5">
        <div class="mb-12 text-center">
            <h2 class="font-[poppins] text-3xl font-bold text-white md:text-4xl lg:text-5xl">Galeri</h2>
            <p class="font-[inter] mt-4 text-lg text-gray-400">Kumpulan momen kolaborasi kami</p>
        </div>

        <div x-data="{ 
            opened: false, 
            activeIndex: 0,
            images: @js($activeCampaigns->map(fn($c) => ['photo' => asset('storage/' . $c->path_img), 'title' => $c->judul])->values()),
            open(i) { this.activeIndex = i; this.opened = true; },
            close() { this.opened = false; },
            next() { this.activeIndex = (this.activeIndex + 1) % this.images.length; },
            prev() { this.activeIndex = this.activeIndex === 0 ? this.images.length - 1 : this.activeIndex - 1; }
        }"
        @keyup.right.window="opened && next()"
        @keyup.left.window="opened && prev()"
        @keyup.escape.window="close()"
        class="w-full">
            
            <!-- Gallery Grid -->
            <ul class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                <template x-for="(img, i) in images" :key="i">
                    <li @click="open(i)" class="relative group cursor-zoom-in rounded-lg border border-gray-700 hover:border-indigo-400 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 overflow-hidden">
                        <img :src="img.photo" :alt="img.title"
                            class="object-cover w-full h-auto bg-gray-800 aspect-5/6 lg:aspect-2/3 xl:aspect-3/4">
                        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black/80 to-transparent p-3 opacity-0 group-hover:opacity-100 transition-opacity">
                            <p class="font-[inter] text-white text-sm font-medium truncate" x-text="img.title"></p>
                        </div>
                    </li>
                </template>
            </ul>

            <!-- Lightbox Modal -->
            <template x-teleport="body">
                <div x-show="opened" @click="close()"
                    x-transition.opacity
                    class="fixed inset-0 z-[99] flex items-center justify-center bg-black/80 cursor-zoom-out"
                    style="display: none;">
                    
                    <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                        <!-- Prev Button -->
                        <button @click.stop="prev()" 
                            class="absolute left-0 w-14 h-14 flex items-center justify-center bg-gray-800/80 hover:bg-gray-700 text-white rounded-full translate-x-10 xl:-translate-x-24 2xl:-translate-x-32 transition-colors">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        <!-- Image -->
                        <div class="flex flex-col items-center w-full h-full">
                            <img x-show="opened" x-transition
                                :src="images[activeIndex]?.photo"
                                :alt="images[activeIndex]?.title"
                                class="object-contain w-full max-h-[80vh] cursor-zoom-out">
                            <h3 class="font-[poppins] text-white text-xl font-semibold mt-4 px-4 text-center" 
                                x-text="images[activeIndex]?.title"></h3>
                        </div>

                        <!-- Next Button -->
                        <button @click.stop="next()" 
                            class="absolute right-0 w-14 h-14 flex items-center justify-center bg-gray-800/80 hover:bg-gray-700 text-white rounded-full -translate-x-10 xl:translate-x-24 2xl:translate-x-32 transition-colors">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
@endif
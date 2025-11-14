<section class="px-2 py-16 bg-gray-900 md:px-0">
    <div class="container max-w-6xl px-8 mx-auto xl:px-5">
        <div class="mb-12 text-center">
            <h2 class="font-[poppins] text-3xl font-bold text-white md:text-4xl lg:text-5xl">Galeri</h2>
            <p class="font-[inter] mt-4 text-lg text-gray-400">Kumpulan momen kolaborasi kami</p>
        </div>

        @php
        $activeCampaigns = $campaigns->filter(function($campaign) {
        return $campaign->status === 'aktif' && !empty($campaign->path_img);
        });
        @endphp

        <div x-data="{
            imageGalleryOpened: false,
            imageGalleryActiveUrl: null,
            imageGalleryImageIndex: null,
            imageGallery: @json($activeCampaigns->map(function($campaign) {
                return [
                    'photo' => asset('storage/' . $campaign->path_img),
                    'alt' => $campaign->judul
                ];
            })->values()),
            imageGalleryOpen(event) {
                this.imageGalleryImageIndex = event.target.dataset.index;
                this.imageGalleryActiveUrl = event.target.src;
                this.imageGalleryOpened = true;
            },
            imageGalleryClose() {
                this.imageGalleryOpened = false;
                setTimeout(() => this.imageGalleryActiveUrl = null, 300);
            },
            imageGalleryNext(){
                this.imageGalleryImageIndex = (this.imageGalleryImageIndex == this.imageGallery.length) ? 1 : (parseInt(this.imageGalleryImageIndex) + 1);
                this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
            },
            imageGalleryPrev() {
                this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 1) ? this.imageGallery.length : (parseInt(this.imageGalleryImageIndex) - 1);
                this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
            }
        }"
            @image-gallery-next.window="imageGalleryNext()"
            @image-gallery-prev.window="imageGalleryPrev()"
            @keyup.right.window="imageGalleryNext();"
            @keyup.left.window="imageGalleryPrev();"
            class="w-full h-full select-none">
            <div class="mx-auto max-w-6xl select-none">
                @if($activeCampaigns->count() > 0)
                <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                    <template x-for="(image, index) in imageGallery">
                        <li>
                            <img
                                x-on:click="imageGalleryOpen"
                                :src="image.photo"
                                :alt="image.alt"
                                :data-index="index+1"
                                class="object-cover select-none w-full h-auto bg-gray-800 rounded-lg cursor-zoom-in aspect-5/6 lg:aspect-2/3 xl:aspect-3/4 hover:opacity-80 transition-opacity duration-300">
                        </li>
                    </template>
                </ul>
                @else
                <div class="flex flex-col items-center justify-center py-20">
                    <svg class="w-24 h-24 text-gray-700 mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="font-[poppins] text-xl font-semibold text-gray-300 mb-2">Galeri Masih Kosong</h3>
                    <p class="text-gray-500 text-center max-w-md">Belum ada campaign aktif dengan foto untuk ditampilkan saat ini</p>
                </div>
                @endif
            </div>
            <template x-teleport="body">
                <div
                    x-show="imageGalleryOpened"
                    x-transition:enter="transition ease-in-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:leave="transition ease-in-in duration-300"
                    x-transition:leave-end="opacity-0"
                    @click="imageGalleryClose"
                    @keydown.window.escape="imageGalleryClose"
                    x-trap.inert.noscroll="imageGalleryOpened"
                    class="fixed inset-0 z-[99] flex items-center justify-center bg-black/80 select-none cursor-zoom-out"
                    x-cloak>
                    <div class="flex relative justify-center items-center w-11/12 xl:w-4/5 h-11/12">
                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="flex absolute left-0 justify-center items-center w-14 h-14 text-white rounded-full translate-x-10 cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-gray-800/80 hover:bg-gray-700">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </div>
                        <img
                            x-show="imageGalleryOpened"
                            x-transition:enter="transition ease-in-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-50"
                            x-transition:leave="transition ease-in-in duration-300"
                            x-transition:leave-end="opacity-0 transform scale-50"
                            class="object-contain object-center w-full h-full select-none cursor-zoom-out"
                            :src="imageGalleryActiveUrl"
                            alt="">
                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="flex absolute right-0 justify-center items-center w-14 h-14 text-white rounded-full -translate-x-10 cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-gray-800/80 hover:bg-gray-700">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
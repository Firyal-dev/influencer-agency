<section class="bg-gray-900 sm:py-16">
    <div class="w-full px-5 py-15 mx-auto space-y-12 max-w-7xl">

        <!-- Header -->
        <div class="text-center mb-12">
            <p class="font-[inter] mb-2 text-base font-medium tracking-tight text-indigo-400 uppercase">
                Blog Kami
            </p>
            <h2 class="font-[poppins] text-3xl font-extrabold text-white sm:text-4xl">
                Campaign Terbaru Bersama <span class="text-indigo-400">Brand</span>
            </h2>
            <p class="font-[inter] mt-4 text-gray-400 max-w-2xl mx-auto">
                Temukan artikel terbaru seputar campaign brand dan influencer marketing.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 gap-8 sm:gap-10 sm:px-5 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($campaigns as $item)
            <div class="rounded-lg overflow-hidden border border-gray-700 bg-gray-800 text-white shadow-sm hover:border-indigo-400 hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
                <!-- Image -->
                <div class="relative">
                    <a href="{{ route('blog-detail', $item->id) }}">
                        <img src="{{ asset('storage/' . $item->path_img) }}" 
                             alt="{{ $item->judul }}"
                             class="w-full h-56 object-cover">
                    </a>
                    <!-- Badge on Image -->
                    <div class="absolute top-4 left-4">
                        <div class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white shadow-lg">
                            <span>{{ $item->brand->industri }}</span>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-7">
                    <h2 class="mb-2 text-lg font-bold leading-none tracking-tight">
                        <a href="{{ route('blog-detail', $item->id) }}" 
                           class="hover:text-indigo-400 transition-colors">
                            {{ $item->judul }}
                        </a>
                    </h2>
                    
                    <p class="mb-5 text-gray-400 text-sm">
                        {{ \Illuminate\Support\Str::limit($item->deskripsi, 100, '...') }}
                    </p>

                    <!-- Meta Info -->
                    <p class="mb-5 text-xs font-medium text-gray-500">
                        by <span class="text-indigo-400 hover:text-indigo-300 underline">{{ $item->brand->nama_brand }}</span> · 
                        <span>{{ $item->created_at->format('F, Y') }}</span>
                    </p>

                    <!-- Button -->
                    <a href="{{ route('blog-detail', $item->id) }}" 
                       class="inline-flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-medium text-white transition-colors rounded-md focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 focus-visible:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-indigo-600 hover:bg-indigo-700">
                        Lihat Campaign
                    </a>
                </div>
            </div>                
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-400 text-lg">Belum ada campaign tersedia</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
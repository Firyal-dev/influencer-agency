<section id="why-us" class="py-15 bg-gray-900">
    <div data-aos="fade-up" class="max-w-6xl py-5 px-6 mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl font-[poppins]">
            Mengapa Memilih <span class="text-indigo-400">Kami?</span>
        </h2>
        <p class="mt-4 text-gray-400 font-inter max-w-2xl mx-auto font-[inter]">
            Kami bantu brand menemukan influencer yang paling relevan untuk menciptakan kampanye yang efektif dan berpengaruh.
        </p>

        <div class="grid gap-8 mt-12 sm:grid-cols-2 lg:grid-cols-4">
            @php
            // features
            $features = [
                [
                    'icon' => 'heroicon-o-sparkles',
                    'title' => 'Influencer Terverifikasi',
                    'description' => 'Kami hanya bekerja sama dengan influencer yang aktif dan sesuai dengan niche brand Anda.'
                ],
                [
                    'icon' => 'heroicon-o-chart-bar',
                    'title' => 'Strategi Data-Driven',
                    'description' => 'Semua campaign disusun berdasarkan data performa dan analisis tren terkini.'
                ],
                [
                    'icon' => 'heroicon-o-hand-thumb-up',
                    'title' => 'Manajemen Lengkap',
                    'description' => 'Dari negosiasi, konten, sampai laporan akhir — semua kami urus dengan transparan.'
                ],
                [
                    'icon' => 'heroicon-o-heart',
                    'title' => 'Hubungan Jangka Panjang',
                    'description' => 'Kami percaya kolaborasi berkelanjutan menghasilkan dampak yang lebih kuat untuk brand Anda.'
                ]
            ];
            @endphp

            @foreach($features as $feature)
            <x-card
                :icon="$feature['icon']"
                :title="$feature['title']"
                :description="$feature['description']"
                style="p-6 bg-gray-800 flex flex-col items-center"
                titleSize="text-xl"
                titleClass="text-white font-[poppins] font-bold text-center"
                descriptionClass="text-gray-300 font-[inter] leading-relaxed text-center"
                iconSize="w-7 h-7"
                iconWrapper="w-14 h-14" />
            @endforeach
        </div>
    </div>
</section>
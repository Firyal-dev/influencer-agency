<section class="py-20 bg-gray-900">
    <div class="container max-w-7xl px-8 mx-auto">
        <div class="text-center mb-16">
            <h2 class="font-[poppins] text-4xl md:text-5xl font-bold text-white mb-4">
                Nilai-Nilai <span class="text-indigo-400">Kami</span>
            </h2>
            <p class="font-[inter] text-xl text-gray-400">
                Prinsip yang menjadi fondasi setiap keputusan kami
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8" data-aos="fade-up">
            @php
            $values = [
                [
                    'icon' => 'heroicon-o-shield-check',
                    'title' => 'Transparansi',
                    'description' => 'Kami percaya pada keterbukaan data dan proses untuk membangun kepercayaan dengan semua pihak.'
                ],
                [
                    'icon' => 'heroicon-o-sparkles',
                    'title' => 'Kualitas',
                    'description' => 'Mengutamakan hasil kampanye yang berkualitas dengan ROI terukur untuk setiap klien.'
                ],
                [
                    'icon' => 'heroicon-o-bolt',
                    'title' => 'Inovasi',
                    'description' => 'Terus berinovasi dengan teknologi terbaru untuk memberikan solusi terbaik.'
                ],
                [
                    'icon' => 'heroicon-o-user-group',
                    'title' => 'Kolaborasi',
                    'description' => 'Membangun hubungan jangka panjang yang saling menguntungkan dengan semua partner.'
                ],
                [
                    'icon' => 'heroicon-o-lock-closed',
                    'title' => 'Integritas',
                    'description' => 'Berkomitmen pada kejujuran dan etika dalam setiap aspek bisnis kami.'
                ],
                [
                    'icon' => 'heroicon-o-heart',
                    'title' => 'Customer First',
                    'description' => 'Kepuasan klien adalah prioritas utama dalam setiap layanan yang kami berikan.'
                ]
            ];
            @endphp

            @foreach($values as $value)
                <x-card 
                    :icon="$value['icon']"
                    :title="$value['title']"
                    :description="$value['description']"
                    style="bg-gray-800 p-8"
                />
            @endforeach
        </div>
    </div>
</section>
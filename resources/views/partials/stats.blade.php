<section class="py-20 bg-gray-800">
    <div data-aos="fade-up" class="max-w-6xl px-6 mx-auto">
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 text-center">
            @php
            $stats = [
            [
            'number' => '500+',
            'title' => 'Brand Partner',
            'description' => 'Telah mempercayai kami'
            ],
            [
            'number' => '2,000+',
            'title' => 'Influencer Aktif',
            'description' => 'Dalam database kami'
            ],
            [
            'number' => '95%',
            'title' => 'Success Rate',
            'description' => 'Campaign yang berhasil'
            ],
            [
            'number' => '10M+',
            'title' => 'Total Reach',
            'description' => 'Audience terjangkau'
            ]
            ];
            @endphp

            @foreach($stats as $stat)
            <div class="space-y-2">
                <h3 class="text-5xl md:text-6xl font-bold text-indigo-400 font-[poppins]">
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
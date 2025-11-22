<section data-aos="fade-up" id="layanan" class="py-20 bg-gray-900 pt-30">
    <div class="max-w-6xl px-6 mx-auto">
        <!-- Header -->
        <div class="text-center mb-16">
            <p class="font-[inter] mb-2 text-base font-medium tracking-tight text-indigo-400 uppercase">
                Layanan Kami
            </p>
            <h2 class="font-[poppins] text-3xl font-extrabold text-white sm:text-4xl">
                Solusi <span class="text-indigo-400">Influencer Marketing</span> Terpadu
            </h2>
            <p class="font-[inter] mt-4 text-gray-400 max-w-2xl mx-auto">
                Dari strategi hingga eksekusi, kami siapkan semua yang brand Anda butuhkan untuk kampanye yang sukses.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @php
            $services = [
                [
                    'icon' => 'heroicon-o-magnifying-glass',
                    'title' => 'Influencer Discovery',
                    'description' => 'Temukan influencer yang tepat dari database 2000+ creator terverifikasi di berbagai niche dan platform.',
                    'features' => [
                        'Filter berdasarkan niche & demografi',
                        'Analisis engagement rate',
                        'Verifikasi follower asli'
                    ]
                ],
                [
                    'icon' => 'heroicon-o-light-bulb',
                    'title' => 'Campaign Strategy',
                    'description' => 'Strategi kampanye data-driven yang disesuaikan dengan target dan budget brand Anda.',
                    'features' => [
                        'Riset target audience',
                        'Creative brief development',
                        'Timeline & milestone planning'
                    ]
                ],
                [
                    'icon' => 'heroicon-o-megaphone',
                    'title' => 'Content Creation',
                    'description' => 'Kolaborasi dengan influencer untuk menghasilkan konten autentik yang resonate dengan audience.',
                    'features' => [
                        'Creative direction',
                        'Content approval workflow',
                        'Multi-platform optimization'
                    ]
                ],
                [
                    'icon' => 'heroicon-o-clipboard-document-check',
                    'title' => 'Campaign Management',
                    'description' => 'Kelola seluruh proses campaign dari A-Z, dari negosiasi hingga posting.',
                    'features' => [
                        'Contract & negotiation',
                        'Payment management',
                        'Posting schedule coordination'
                    ]
                ],
                [
                    'icon' => 'heroicon-o-chart-bar',
                    'title' => 'Performance Analytics',
                    'description' => 'Tracking dan analisis performa campaign secara real-time dengan dashboard interaktif.',
                    'features' => [
                        'Real-time monitoring',
                        'ROI calculation',
                        'Detailed reporting'
                    ]
                ],
                [
                    'icon' => 'heroicon-o-shield-check',
                    'title' => 'Brand Safety',
                    'description' => 'Pastikan reputasi brand Anda terlindungi dengan monitoring dan compliance check.',
                    'features' => [
                        'Content compliance check',
                        'Crisis management support',
                        'Legal & disclosure guidance'
                    ]
                ]
            ];
            @endphp

            @foreach($services as $service)
            <x-card
                :icon="$service['icon']"
                :title="$service['title']"
                :description="$service['description']"
                style="p-8 bg-gray-800"
                titleSize="text-xl"
                titleClass="text-white font-[poppins] font-bold"
                descriptionClass="text-gray-400 font-[inter] text-sm leading-relaxed"
                containerClass="group">
                
                <!-- Features List -->
                <ul class="space-y-2">
                    @foreach($service['features'] as $feature)
                    <li class="font-[inter] flex items-start text-sm text-gray-500">
                        <svg class="w-5 h-5 mr-2 text-indigo-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        {{ $feature }}
                    </li>
                    @endforeach
                </ul>
            </x-card>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="mt-16 text-center font-[inter]">
            <x-link target="_blank" url="https://wa.me/6282114868530" text="Konsultasi Gratis" style="gap-2 px-8 py-4 font-medium text-white bg-indigo-600 hover:bg-indigo-500 transition-colors duration-200 shadow-lg hover:shadow-xl" >
                <x-heroicon-s-arrow-right class="w-5 h-5" />
            </x-link>

            <p class="mt-4 text-sm text-gray-500">
                Atau hubungi kami di <a href="mailto:hello@faranagency.com" class="text-indigo-400 hover:text-indigo-300">hello@faranagency.com</a>
            </p>
        </div>
    </div>
</section>
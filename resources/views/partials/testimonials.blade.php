<section class="flex items-center justify-center py-16 bg-gray-900 min-w-screen">
    <div class="max-w-6xl px-12 mx-auto bg-gray-900 md:px-16 xl:px-10">
        <div class="flex flex-col items-center lg:flex-row">
            <div data-aos="fade-right" class="flex flex-col items-start justify-center w-full h-full pr-8 mb-10 lg:mb-0 lg:w-1/2">
                <p class="font-[inter] mb-2 text-base font-medium tracking-tight text-indigo-400 uppercase" data-primary="indigo-400">Testimoni Klien Kami</p>
                <h2 class="font-[poppins] text-4xl font-extrabold leading-10 tracking-tight text-white sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">Kata Mereka</h2>
                <p class="font-[inter] my-6 text-lg text-gray-400">Jangan hanya percaya kata kami. Dengarkan langsung dari brand dan influencer yang telah berkolaborasi bersama kami.</p>
            </div>
            <div data-aos="fade-left" class="w-full lg:w-1/2 relative">
                <div class="testimonial-container overflow-hidden h-[600px] relative">
                    <div class="testimonial-scroll space-y-4">
                        @php
                        $testimonials = [
                        [
                        'name' => 'Kemal',
                        'position' => 'Hacker Nusa Bangsa',
                        'image' => 'testi/kemal.jpg',
                        'quote' => 'Platform ini sangat membantu brand kami menemukan influencer yang tepat. ROI campaign meningkat drastis!'
                        ],
                        [
                        'name' => 'Ubay',
                        'position' => 'Siswa Nusa Bangsa',
                        'image' => 'testi/ubay.jpg',
                        'quote' => 'Kerjasama yang profesional dan transparan. Semua proses dari negosiasi sampai laporan final sangat smooth.'
                        ],
                        [
                        'name' => 'Azizah',
                        'position' => 'CEO Rental Motor',
                        'image' => 'testi/jijah.jpg',
                        'quote' => 'Tim yang sangat responsif dan memahami kebutuhan brand. Campaign kami jadi lebih efektif dan terukur.'
                        ],
                        [
                        'name' => 'Dio',
                        'position' => 'Rektor IPB',
                        'image' => 'testi/dio.jpg',
                        'quote' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusantium enim rem odit minus.'
                        ],
                        ];
                        @endphp

                        @foreach($testimonials as $testimonial)
                        <blockquote class="flex items-center justify-between w-full p-6 bg-gray-800 shadow-lg border border-gray-700 hover:border-indigo-400 transition-all duration-300 rounded-lg">
                            <div class="flex flex-col pr-8">
                                <div class="relative pl-12">
                                    <svg class="absolute left-0 w-10 h-10 text-indigo-400 fill-current" data-primary="indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                    </svg>
                                    <p class="font-[inter] mt-2 text-sm text-gray-300 sm:text-base lg:text-sm xl:text-base">{{ $testimonial['quote'] }}</p>
                                </div>

                                <h3 class="font-[poppins] pl-12 mt-3 text-sm font-medium leading-5 text-white truncate sm:text-base lg:text-base">
                                    {{ $testimonial['name'] }}
                                    <span class="font-[inter] mt-1 text-sm leading-5 text-gray-400 truncate">- {{ $testimonial['position'] }}</span>
                                </h3>
                            </div>
                            <img class="shrink-0 w-20 h-20 bg-gray-700 rounded-full xl:w-24 xl:h-24 object-cover" src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}">
                        </blockquote>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .testimonial-container {
        mask-image: linear-gradient(to bottom, transparent, black 10%, black 90%, transparent);
        -webkit-mask-image: linear-gradient(to bottom, transparent, black 10%, black 90%, transparent);
    }

    .testimonial-scroll {
        animation: scroll-infinite 30s linear infinite;
        will-change: transform;
    }

    .testimonial-scroll:hover {
        animation-play-state: paused;
    }

    @keyframes scroll-infinite {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-50%);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollContainer = document.querySelector('.testimonial-scroll');
        if (scrollContainer) {
            const testimonials = scrollContainer.innerHTML;
            scrollContainer.innerHTML = testimonials + testimonials;
        }
    });
</script>
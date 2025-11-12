<section class="z-50 fixed shadow-2xl w-full px-8 text-gray-300 bg-gray-900" {!! $attributes ?? '' !!}>
    <div class="font-[inter] container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl min-h-[80px]">
        <div class="relative flex flex-col md:flex-row">
            <a href="#_" class="flex items-center mb-5 font-medium text-white lg:w-auto lg:items-center lg:justify-center md:mb-0">
                <img src="{{ asset('logo/logo.png') }}" alt="Logo" class="mx-auto h-12 w-auto object-contain">
            </a>
            <nav class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-700">
                <a href="#_" class="mr-5 font-medium leading-6 text-gray-400 hover:text-white">Beranda</a>
                <a href="#_" class="mr-5 font-medium leading-6 text-gray-400 hover:text-white">Tentang</a>
                <a href="#_" class="mr-5 font-medium leading-6 text-gray-400 hover:text-white">Layanan</a>
                <a href="#_" class="mr-5 font-medium leading-6 text-gray-400 hover:text-white">Blog</a>
                <a href="#_" class="mr-5 font-medium leading-6 text-gray-400 hover:text-white">Kontak</a>
            </nav>
        </div>

        <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
            <a href="#" class="text-base font-medium leading-6 text-gray-400 whitespace-no-wrap transition duration-150 ease-in-out hover:text-white">
                Masuk
            </a>
            <a href="#" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600" data-rounded="rounded-md" data-primary="indigo-600">
                Daftar
            </a>
        </div>
    </div>
</section>
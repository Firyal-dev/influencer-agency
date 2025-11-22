<section class="z-50 fixed shadow-2xl w-full px-8 text-gray-300 bg-gray-900 transition-all duration-300"
    {!! $attributes ?? '' !!}>
    <div
        class="font-[inter] container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl min-h-20">
        <div class="relative flex flex-col md:flex-row">
            <a href="{{ route('home') }}"
                class="flex items-center mb-5 font-medium text-white lg:w-auto lg:items-center lg:justify-center md:mb-0 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('logo/logo.png') }}" alt="Logo" class="mx-auto h-12 w-auto object-contain">
            </a>
            <nav
                class="flex flex-wrap items-center mb-5 text-base md:mb-0 md:pl-8 md:ml-8 md:border-l md:border-gray-700">
                <a href="{{ route('home') }}"
                    class="mr-5 font-medium leading-6 transition-all duration-300 ease-in-out {{ request()->routeIs('home') ? 'text-white' : 'text-gray-400 hover:text-white' }} hover:transform hover:translate-y-[-2px]">
                    Beranda
                </a>
                <a href="{{ route('tentang') }}"
                    class="mr-5 font-medium leading-6 transition-all duration-300 ease-in-out {{ request()->routeIs('tentang') ? 'text-white' : 'text-gray-400 hover:text-white' }} hover:transform hover:translate-y-[-2px]">
                    Tentang
                </a>
                <a href="{{ route('layanan') }}"
                    class="mr-5 font-medium leading-6 transition-all duration-300 ease-in-out {{ request()->routeIs('layanan') ? 'text-white' : 'text-gray-400 hover:text-white' }} hover:transform hover:translate-y-[-2px]">
                    Layanan
                </a>
                <a href="{{ route('blog') }}"
                    class="mr-5 font-medium leading-6 transition-all duration-300 ease-in-out {{ request()->routeIs('blog') ? 'text-white' : 'text-gray-400 hover:text-white' }} hover:transform hover:translate-y-[-2px]">
                    Blog
                </a>
            </nav>
        </div>

        {{-- button login & register --}}
        @auth('client')
            <div class="relative inline-block ml-5">
                <div x-data="{ open: false }" class="inline-flex items-center gap-4">

                    {{-- mulai campaign --}}
                    <x-link url="{{ route('brand') }}" text="Mulai Campaign" data-rounded="rounded-md"
                        data-primary="indigo-600"
                        style="px-3 py-1 bg-indigo-600 hover:bg-indigo-500 font-medium text-white transition-all duration-300 ease-in-out" />

                    <!-- Profile Picture (klik atau hover) -->
                    <button @mouseenter="open = true" @mouseleave="open = false"
                        class="flex items-center focus:outline-none">
                        <!-- Ganti dengan path foto profil sebenarnya nanti -->
                        <img src="{{ asset('placeholder/user_placeholder.jpg') }}" alt="Profile"
                            class="w-8 h-8 rounded-full object-cover" />
                    </button>

                    <!-- Dropdown Popup -->
                    <div x-show="open" @mouseenter="open = true" @mouseleave="open = false" x-transition
                        class="absolute right-0 z-10 mt-35 w-48 origin-top-right 
           bg-gray-800 text-gray-200 rounded-md shadow-lg 
           py-1 ring-1 ring-black/50">

                        <!-- Nama user -->
                        <div class="px-4 py-2 text-sm text-gray-300 border-b border-gray-700">
                            {{ Auth::guard('client')->user()->nama_perusahaan }}
                        </div>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left px-4 py-2 text-sm 
                   text-gray-300 hover:bg-red-500 hover:text-white
                   transition-colors duration-150">
                                Logout
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        @else
            <div class="inline-flex items-center ml-5 space-x-6 lg:justify-end">
                <a href="{{ route('login') }}"
                    class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-white">
                    Sign in
                </a>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600"
                    data-rounded="rounded-md" data-primary="indigo-600">
                    Sign up
                </a>
            </div>
        @endauth
    </div>
</section>

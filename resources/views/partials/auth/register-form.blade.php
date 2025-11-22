<section class="w-full px-8 bg-gray-900 xl:px-8 min-h-screen">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row min-h-screen">

            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <p class="font-medium text-blue-400 uppercase font-[inter]" data-primary="blue-400">
                    Membangun Bisnis
                </p>
                <h2 class="text-2xl font-extrabold leading-none text-white sm:text-3xl md:text-5xl font-[poppins]">
                    Mengubah Cara Orang Berbisnis.
                </h2>
                <p class="text-xl text-gray-300 md:pr-16 font-[inter]">
                    Pelajari cara berinteraksi dengan pengunjung Anda dan mengajarkan mereka tentang misi Anda. 
                    Kami merevolusi cara pelanggan dan bisnis berinteraksi.
                </p>
            </div>

            <div class="w-full mt-16 md:mt-0 md:w-2/5">
                <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-gray-800 border-b-2 border-gray-700 rounded-lg shadow-2xl px-7">
                    <h3 class="mb-6 text-2xl font-medium text-center text-white font-[poppins]">
                        Daftar Akun
                    </h3>

                    {{-- error handling --}}
                    @if ($errors->any())
                        <div class="mb-4 p-3 bg-red-500/10 border border-red-500 rounded-lg">
                            <p class="text-red-400 text-sm font-[inter]">{{ $errors->first() }}</p>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="mb-4 p-3 bg-green-500/10 border border-green-500 rounded-lg">
                            <p class="text-green-400 text-sm font-[inter]">{{ session('success') }}</p>
                        </div>
                    @endif

                    <form action="{{ route('register.submit') }}" method="POST">
                        @csrf
                        
                        <x-input
                            type="text"
                            name="nama_perusahaan"
                            id="nama_perusahaan"
                            placeholder="Nama Perusahaan"
                            icon="heroicon-o-building-office"
                            required />

                        <x-input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Alamat email"
                            icon="heroicon-o-envelope"
                            required />

                        <x-input
                            type="text"
                            name="no_hp"
                            id="no_hp"
                            placeholder="Nomor HP"
                            icon="heroicon-o-phone"
                            required />

                        <x-input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Kata sandi"
                            icon="heroicon-o-lock-closed"
                            required />

                        <button type="submit"
                            class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors font-[poppins]">
                            Daftar
                        </button>

                    </form>
                    
                    <p class="w-full mt-4 text-sm text-center text-gray-400 font-[inter]">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="text-blue-400 underline hover:text-blue-300">
                            Masuk di sini
                        </a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
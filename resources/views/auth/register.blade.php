@extends('layouts.auth')

@section('content')
    <h4 class="w-full text-3xl font-bold text-white font-[Poppins]">Daftar Akun</h4>
    <p class="text-lg text-gray-400 font-[Inter]">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-indigo-400 hover:text-indigo-300">
            Masuk di sini
        </a>
    </p>

    @if ($errors->any())
    <div class="mt-4 p-4 bg-red-900/50 border border-red-700 rounded-lg">
        <ul class="text-sm text-red-300 space-y-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('register') }}" class="relative w-full mt-10 space-y-5">
        @csrf

        <x-inputauth
            label="Nama Perusahaan"
            type="text"
            name="nama_perusahaan"
            placeholder="Nama Perusahaan"
            :value="old('name')"
            required />

        <x-inputauth
            label="Alamat Email"
            type="email"
            name="email"
            placeholder="namaperusahaan@example.com"
            :value="old('email')"
            required />

        <x-inputauth
            label="No. Hp"
            type="number"
            name="no_hp"
            placeholder="081234567890"
            :value="old('no_hp')"
            required />

        <x-inputauth
            label="Kata Sandi"
            type="password"
            name="password"
            placeholder="Masukkan kata sandi (min. 8 karakter)"
            required />

        <x-inputauth
            label="Konfirmasi Kata Sandi"
            type="password"
            name="password_confirmation"
            placeholder="Masukkan ulang kata sandi"
            required />

        <div class="relative">
            <button
                type="submit"
                class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-indigo-600 rounded-lg hover:bg-indigo-700 ease font-[Poppins]">
                Buat Akun
            </button>
        </div>
    </form>
@endsection
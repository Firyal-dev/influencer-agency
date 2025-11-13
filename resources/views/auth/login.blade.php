@extends('layouts.auth')

@section('content')
<h4 class="w-full text-3xl font-bold text-white font-[Poppins]">Masuk Akun</h4>
<p class="text-lg text-gray-400 font-[Inter]">
    Belum punya akun?
    <a href="{{ route('showRegister') }}" class="text-indigo-400 hover:text-indigo-300">
        Daftar di sini
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

@if (session('success'))
<div class="mt-4 p-4 bg-green-900/50 border border-green-700 rounded-lg">
    <p class="text-sm text-green-300">{{ session('success') }}</p>
</div>
@endif

<form method="POST" action="{{ route('login') }}" class="relative w-full mt-10 space-y-5">
    @csrf

    <x-inputauth
        label="Alamat Email"
        type="email"
        name="email"
        placeholder="namaperusahaan@example.com"
        :value="old('email')"
        required />

    <x-inputauth
        label="Kata Sandi"
        type="password"
        name="password"
        placeholder="Masukkan kata sandi"
        required />

    <div class="flex items-center">
        <input
            type="checkbox"
            name="remember"
            id="remember"
            class="w-4 h-4 text-indigo-600 bg-gray-700 border-gray-600 rounded focus:ring-indigo-600 focus:ring-2">
        <label for="remember" class="ml-2 text-sm text-gray-400 font-[Inter]">
            Ingat saya
        </label>
    </div>

    <div class="relative">
        <button
            type="submit"
            class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-indigo-600 rounded-lg hover:bg-indigo-700 ease font-[Poppins]">
            Masuk
        </button>
    </div>
</form>
@endsection
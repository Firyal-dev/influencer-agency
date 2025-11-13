<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Autentikasi' }}</title>

    <!-- logo -->
    <link rel="shortcut icon" href="{{ asset('logo/logo.png') }}" type="image/x-icon">

    <!-- tailwindcss -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- alpinejs -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<body>
    <main id="content">
        <section class="w-full bg-gray-900">
            <div class="mx-auto max-w-7xl">
                <div class="flex flex-col lg:flex-row min-h-screen">

                    <!-- Bagian kiri -->
                    <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-linear-to-r from-gray-900 via-gray-800 to-gray-900">
                        <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                            <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                                <div class="relative">
                                    <p class="mb-2 font-medium text-gray-400 uppercase font-[Inter]">Bekerja lebih cerdas</p>
                                    <h2 class="text-indigo-400 text-5xl font-bold xl:text-6xl font-[Poppins]">
                                        Fitur untuk membantu kamu bekerja lebih efisien
                                    </h2>
                                </div>
                                <p class="text-2xl text-gray-400 font-[Inter]">
                                    Kami menyediakan solusi sederhana agar kamu bisa mendapatkan hasil maksimal dari bisnismu dan aplikasimu.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Bagian kanan -->
                    <div class="w-full bg-gray-800 lg:w-6/12 xl:w-5/12">
                        <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                            @yield('content')
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</body>

</html>
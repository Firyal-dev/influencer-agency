<div class="{{ $style }} rounded-2xl shadow-sm hover:border-indigo-400 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 cursor-pointer border border-gray-700">
    <div class="flex justify-center mb-4 text-indigo-400">
        <x-dynamic-component :component="$icon" class="w-10 h-10" />
    </div>
    <h3 class="text-lg font-semibold text-white font-[poppins]">{{ $title }}</h3>
    <p class="mt-2 text-gray-400 text-sm font-[inter]">
        {{ $description }}
    </p>
</div>
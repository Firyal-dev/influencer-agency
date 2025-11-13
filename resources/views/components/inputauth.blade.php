<div class="relative">
    <label class="font-medium text-gray-300 font-[Inter]">{{ $label }}</label>
    <input
        type="{{ $type ?? 'text' }}"
        name="{{ $name }}"
        value="{{ $value ?? old($name) }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'block w-full px-4 py-4 mt-2 text-xl placeholder-gray-500 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-4 focus:ring-indigo-600 focus:ring-opacity-50 border border-gray-600 font-[Inter]']) }} />
</div>
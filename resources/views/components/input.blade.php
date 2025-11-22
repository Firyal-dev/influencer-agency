<div class="{{ $containerClass }}">
    @if($label)
    <label for="{{ $id }}" class="{{ $labelClass }} font-[inter]">
        {{ $label }}
        @if($required)
        <span class="text-red-400">*</span>
        @endif
    </label>
    @endif

    <div class="relative">
        @if($icon && $iconPosition === 'left')
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <x-dynamic-component :component="$icon" class="w-5 h-5 text-gray-400" />
        </div>
        @endif

        @if($type === 'textarea')
        <textarea
            name="{{ $name }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }}
            class="{{ $inputClass }} {{ $icon && $iconPosition === 'left' ? 'pl-10' : '' }} {{ $icon && $iconPosition === 'right' ? 'pr-10' : '' }} {{ $class }} font-[inter]"
            rows="4">{{ old($name, $value) }}</textarea>
        @elseif($type === 'checkbox')
        <div class="flex items-center">
            <input
                type="checkbox"
                name="{{ $name }}"
                id="{{ $id }}"
                value="1"
                {{ old($name, $value) ? 'checked' : '' }}
                {{ $required ? 'required' : '' }}
                class="w-4 h-4 text-blue-600 bg-gray-700 border-gray-600 rounded focus:ring-blue-500 {{ $class }}">
            @if($placeholder)
            <label for="{{ $id }}" class="ml-2 text-sm text-gray-400 font-[inter]">
                {{ $placeholder }}
            </label>
            @endif
        </div>
        @else
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $id }}"
            placeholder="{{ $placeholder }}"
            value="{{ old($name, $value) }}"
            {{ $required ? 'required' : '' }}
            class="{{ $inputClass }} {{ $icon && $iconPosition === 'left' ? 'pl-10' : '' }} {{ $icon && $iconPosition === 'right' ? 'pr-10' : '' }} {{ $class }} font-[inter]">
        @endif

        @if($icon && $iconPosition === 'right')
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <x-dynamic-component :component="$icon" class="w-5 h-5 text-gray-400" />
        </div>
        @endif
    </div>
</div>
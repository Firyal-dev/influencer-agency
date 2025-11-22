<div class="{{ $containerClass }} {{ $style }} rounded-2xl shadow-sm border border-gray-700 {{ $showHover ? 'hover:border-indigo-400 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 cursor-pointer' : '' }}">
    @if($icon)
    <div class="{{ $iconWrapper }} {{ $iconBgColor }} rounded-xl flex items-center justify-center mb-6 {{ $showHover ? 'group-hover:scale-110 transition-transform duration-300' : '' }}">
        <x-dynamic-component :component="$icon" class="{{ $iconSize }} {{ $iconColor }}" />
    </div>
    @endif
    
    @if($title)
    <h3 class="{{ $titleSize }} {{ $titleClass }} mb-4">{{ $title }}</h3>
    @endif
    
    @if($description)
    <p class="{{ $descriptionClass }} mb-6">
        {{ $description }}
    </p>
    @endif
    
    <!-- Slot untuk custom content (list, button, etc) -->
    {{ $slot }}
</div>
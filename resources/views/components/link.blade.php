<a href="{{ $url }}"
   @if ($target) target="{{ $target }}" @endif
   class="{{ $style }}">

    {{-- Text --}}
    <span>{{ $text }}</span>

    {{-- Icon / Slot --}}
    @if ($slot->isNotEmpty())
        <span class="ml-2 flex items-center">
            {{ $slot }}
        </span>
    @endif
</a>

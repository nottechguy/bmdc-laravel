<a class="{{ $classNames() }}" href="{{ $href ?? '#' }}" {{ $attributes->merge([]) }}>
    @if ($icon !== null)
        <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $icon }}" />
    @endif

    {{ $text }}
    
    @if ($badge !== null)
        <span class="{{ $classList['supporting_text'] }}">{{ $badge }}</span>
    @endif
</a>

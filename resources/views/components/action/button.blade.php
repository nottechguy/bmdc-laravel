@php

$_tag = $href == NULL ? "button" : "a";


@endphp

<{{ $_tag }} 
    @if ($_tag == 'a')
        href="{{ $href }}"
    @else
        type="{{ $type }}"
    @endif

    {{ $attributes->merge(["class" => $classNames()]) }}>
    @if ($icon !== null)
        <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $icon }}" />
    @endif
    <span class="{{ $classList['label'] }}">{{ $slot }}</span>
    @if (!$noRipple)
        <x-bmdc-ripple class="{{ $classList['ripple'] }}" />
    @endif
</{{ $_tag }}>

@php

$_tag = $href == NULL ? "button" : "a";
$_hasIconSlot = isset($mIcon) && $mIcon->isNotEmpty();

@endphp

<{{ $_tag }} 
    @if ($_tag == 'a')
        href="{{ $href }}"
    @else
        type="{{ $type }}"
    @endif

    {{ $attributes->merge(["class" => $classNames()]) }}>
    @if ($_icon !== NULL || $_hasIconSlot)
        @if ($_icon !== NULL && !$_hasIconSlot)
            <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $_icon }}" />
        @elseif($_hasIconSlot && !$_icon)
            <span class="{{ $classList['icon'] }}">{{ $mIcon }}</span>
        @endif
    @endif
    <span class="{{ $classList['label'] }}">{{ $slot }}</span>
    @if (!$noRipple)
        <x-bmdc-ripple class="{{ $classList['ripple'] }}" />
    @endif
</{{ $_tag }}>

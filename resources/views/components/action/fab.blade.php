@php

$_icon = $icon;
$_hasIconSlot = isset($mIcon) && $mIcon->isNotEmpty();

@endphp

<button {{ $attributes->merge(["class" => $classNames(), "type" => "button"]) }}>
    @if ($_icon !== NULL || $_hasIconSlot)
        @if ($_icon !== NULL && !$_hasIconSlot)
            <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $icon }}" />
        @elseif ($_hasIconSlot && !$_icon)
            <span class="{{ $classList['icon'] }}">{{ $mIcon }}</span>
        @endif
    @endif
    @if ($label !== "")
        <span class="{{ $classList['label'] }}">{{ $label }}</span>
    @endif
    <x-bmdc-ripple class="{{ $classList['ripple'] }}" />
</button>

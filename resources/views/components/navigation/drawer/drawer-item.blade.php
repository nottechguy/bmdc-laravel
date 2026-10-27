@php

$_icon = $icon;
$_hasIconSlot = isset($mIcon) && $mIcon->isNotEmpty();

@endphp

<a
    href="{{ $disabled ? null : ($href ?? '#') }}"
    @if($activated) aria-current="page" @endif
    @if($disabled) aria-disabled="true" tabindex="-1" @endif
    {{ $attributes->class([$classList['container'],
        $classList['activated'] => $activated,
        $classList['disabled'] => $disabled,]) }}
>
    @if ($_icon !== NULL || $_hasIconSlot)
        @if ($_icon !== "" && !$_hasIconSlot)
            <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $_icon }}" />
        @elseif($_hasIconSlot && !$_icon)
            <span class="{{ $classList['icon'] }}">{{ $mIcon }}</span>
        @endif
    @endif

    <span class="{{ $classList['text'] }}">
        {{ $text }}
    </span>

    @if ($badge !== null)
        <span class="{{ $classList['supporting_text'] }}">
            {{ $badge }}
        </span>
    @endif

    <x-bmdc-ripple />
</a>

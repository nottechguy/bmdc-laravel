@aware([
    'type', 
    'align'
])

@php
    $_label     = $label;
    $_icon      = $icon;
    $_badge     = $badge;
    $_selected  = $selected;

    $_isSelected = ($_selected === true || $_selected === 'true' || $_selected === '1');
    $_hasAlign = in_array($align, ['start', 'center', 'end']);

@endphp

<button role="tab" @class([
        $classList['container'],
        $classList['stacked'] => ($type == 'primary' && ($_label !== null && $_icon !== null)),
        $classList['min_width'] => $_hasAlign, 
        $classList['active'] => $_isSelected]
    ) {{ $attributes->merge(['aria-selected' => $_isSelected ? 'true' : 'false', 'tabindex' => $_isSelected ? '0' : '-1']) }}>
    <span class="{{ $classList['content'] }}">
        @if ($_icon !== "")
            <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $_icon }}" />
        @endif

        @if ($_label !== null)
            <span class="{{ $classList['label'] }}">{{ $_label }}</span>
        @endif

        @if ($_badge > 0)
            <x-bmdc-badge :count="$_badge" />
        @endif
    </span>
    <span @class([$classList['indicator'], $classList['indicator_active'] => $_isSelected])>
        <span class="{{ $classList['indicator_content'] }} {{ $classList['indicator_underline'] }}"></span>
    </span>
    <span class="{{ $classList['ripple'] }}"></span>
</button>

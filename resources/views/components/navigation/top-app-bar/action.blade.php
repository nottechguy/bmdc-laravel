@aware([
    'variant'
])

@props([
    'icon',
    'label',
    'href',
    'overflow'
])

@php
    $tag = $href ? 'a' : 'button';
    $_icon = $icon;
    $_label = $label ?? '';
    $_href = $href ?? null;
@endphp

<{{ $tag }} 
    @if($_href) href="{{ $_href }}" @endif
    {{ $attributes->merge(['class' => $classNames()]) }}
    @if($tag === 'button') type="button" @endif
    aria-label="{{ $_label }}"
    data-action-item>
    
    @if($_icon)
        <x-bmdc-icon :name="$_icon" />
    @else
        {{ $slot }}
    @endif
    
    <span class="c_ripple"></span>
</{{ $tag }}>
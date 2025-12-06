@aware([
    'type'
])

@props([
    'text',
    'avatar',
    'leadingIcon',
    'selected'
])

@php

$_hasThumbnail = ($avatar !== NULL || $leadingIcon !== NULL);
$_isSelected = ($selected === TRUE);

@endphp

<button class="{{ $classNames() }}" role="row" {{ $attributes->merge([]) }} type="button">
    @if ($_hasThumbnail)
        @if ($avatar !== NULL)
            <img @class([$classList['icon_leading'], $classList['avatar']]) src="{{ $avatar }}" alt="" />
        @elseif ($leadingIcon)
            <x-bmdc-icon @class([$classList['icon'], $classList['icon_leading'], $classList['icon_leading_hidden'] => $_isSelected]) name="{{ $leadingIcon }}" />
        @endif
    @endif

    @if ($type == 'filter')
        <div class="{{ $classList['checkmark'] }}">
            <svg class="{{ $classList['checkmark_svg'] }}" viewBox="-2 -3 30 30">
                <path class="{{ $classList['checkmark_path'] }}" fill="none" stroke="black" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
            </svg>
        </div>
    @endif
    <span class="{{ $classList['text'] }}">{{ $text }}</span>
    
    @if ($type == 'input')
        <span class="{{ $classList['icon']  }} {{ $classList['icon_trailing'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
        </span>
    @endif
</button>

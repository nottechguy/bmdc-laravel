@props([])

@aware([
    'classList'
])

<x-bmdc-icon-button class="{{ $classList['action'] }} {{ $classList['icon'] }}" {{ $attributes->merge([]) }}>{{ $slot }}</x-bmdc-icon-button>

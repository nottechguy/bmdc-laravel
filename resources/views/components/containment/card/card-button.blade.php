@props([])

@aware([
    'classList'
])

<x-bmdc-button class="{{ $classList['action'] }} {{ $classList['button'] }}">{{ $slot }}</x-bmdc-button>

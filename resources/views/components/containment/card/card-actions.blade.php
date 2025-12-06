@props([])

@aware([
    'classList'
])

<div class="{{ $classList['actions'] }}">{{ $slot }}</div>

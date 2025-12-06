@props([
    'type'
])

<ul class="{{ $classNames() }}" {{ $attributes->merge([]) }}>
    {{ $slot }}
</ul>

@props([
    'classList'
])

<button {{ $attributes->merge(["class" => $classNames(), "type" => "button"]) }}>
    {{ $slot }}
</button>

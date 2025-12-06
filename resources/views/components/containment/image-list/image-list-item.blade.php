@props([
    'image',
    'label'
])

@aware([
    'type'
])

<li class="{{ $classNames() }}" {{ $attributes->merge([]) }}>
    @if ($type == 'standard')
        <div class="{{ $classList['image_container'] }}">
            <img class="{{ $classList['image'] }}" src="{{ $src }}" alt="{{ $label }}">
        </div>
    @else
        <img class="{{ $classList['image'] }}" src="{{ $src }}" alt="{{ $label }}">
    @endif

    @if ($label !== null)
        <div class="{{ $classList['supporting'] }}">
            <span class="{{ $classList['label'] }}">{{ $label }}</span>
        </div>
    @endif
</li>

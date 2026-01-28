@props([
    'image',
    'label'
])

@aware([
    'type'
])

<li class="{{ $classNames() }}">
    @if ($type == 'standard')
        <div class="{{ $classList['image_container'] }}">
            <img class="{{ $classList['image'] }}" src="{{ $src }}" alt="{{ $label }}" {{ $attributes->merge([]) }}>
        </div>
    @else
        <img class="{{ $classList['image'] }}" src="{{ $src }}" alt="{{ $label }}" {{ $attributes->merge([]) }}>
    @endif

    @if ($label !== null)
        <div class="{{ $classList['supporting'] }}">
            <span class="{{ $classList['label'] }}">{{ $label }}</span>
        </div>
    @endif
</li>

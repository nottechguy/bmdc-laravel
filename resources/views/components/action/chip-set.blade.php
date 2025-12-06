@props([
    'type'
])

<div 
    class="{{ $classNames() }}" 
    {{ $attributes->merge([]) }} 
    @if ($type == 'filter')
        role="listbox" aria-orientation="horizontal" aria-multiselectable="true"
    @else
        role="grid"
    @endif
    >
    <div class="{{ $classList['chips'] }}" role="presentation">{{ $slot }}</div>
</div>

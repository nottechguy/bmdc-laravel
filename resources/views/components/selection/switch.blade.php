@props([
    'id'    => uniqid('switch-'),
    'name',
    'checked'
])

@php
    $_id = $id ?? 'switch-' . Illuminate\Support\Str::random(8);
    $_name = $name ?? $_id; // Default name to id if not provided
    $_checked = $checked ?? false;
    $_disabled = $disabled ?? false;
@endphp

<div class="{{ $classNames() }}">
    <div class="{{ $classList['track'] }}"></div>
    <div class="{{ $classList['thumb_underlay'] }}">
        <div class="{{ $classList['thumb'] }}">
            <input
                @if ($_id) id="{{ $_id }}" @endif 
                @if ($_name) name="{{ $_name }}" @endif
                @if ($_disabled) disabled @endif
                {{ $attributes->merge(['class' => $classList['input']]) }} type="checkbox" role="switch" 
                @if ($_checked) aria-checked="true" @else aria-checked="false" @endif
                @if ($_checked) checked @endif
            />
        </div>
    </div>
</div>
@if ($label)
    <label id="{{ $_id }}-label" for="{{ $_id }}" class="{{ $classList['label'] }}">{{ $label }}</label>
@endif

@props([
    'id'    => uniqid('radio-button-'),
    'name',
    'checked'
])

@php
    $_id = $id ?? 'radio-button-' . Illuminate\Support\Str::random(8);
    $_label = $label;
    $_name = $name ?? $_id; // Default name to id if not provided
    $_checked = $checked ?? false;
    $_disabled = $disabled ?? false;
@endphp

<div class="{{ $classNames() }}">
    <input 
    @if ($_id) id="{{ $_id }}" @endif
    {{ $attributes->merge(['class' => $classList['input']]) }}
    type="radio"
    @if ($_id && $_label !== NULL) aria-labelledby="{{ $_id }}-label" @endif
    @if ($_name) name="{{ $_name }}" @endif
    @if ($_disabled) disabled @endif
    @if ($_disabled) aria-disabled="true" @endif
    @if ($_checked) checked @endif>
    
    <div class="{{ $classList['background'] }}">
        <div class="{{ $classList['outer_circle'] }}"></div>
        <div class="{{ $classList['inner_circle'] }}"></div>
    </div>
</div>
@if ($label)
    <label id="{{ $_id }}-label" for="{{ $_id }}" class="{{ $classList['label'] }}">{{ $label }}</label>
@endif

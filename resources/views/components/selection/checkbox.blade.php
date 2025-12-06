@props([
    'id'    => uniqid('checkbox-'),
    'name',
    'checked',
    'required'
])

@php
    $_id = $id ?? 'checkbox-' . Illuminate\Support\Str::random(8);
    $_label = $label;
    $_name = $name ?? $_id; // Default name to id if not provided
    $_checked = $checked ?? false;
    $_disabled = $disabled ?? false;
    $_required = $required ?? false;
    $_indeterminate = $indeterminate ?? false;
@endphp

<div class="{{ $classNames() }}">
    <input 
    @if ($_id) id="{{ $_id }}" @endif
    {{ $attributes->merge(['class' => $classList['input']]) }}
    type="checkbox"
    @if ($_id && $_label !== NULL) aria-labelledby="{{ $_id }}-label" @endif
    @if ($_name) name="{{ $_name }}" @endif
    @if ($_disabled) disabled @endif
    @if ($_checked) checked @endif
    @if ($_required) required @endif
    @if ($_indeterminate) data-indeterminate="true" @endif>
    
    <div class="{{ $classList['background'] }}">
        <svg class="{{ $classList['checkmark'] }}" viewBox="0 0 24 24">
            <path class="{{ $classList['checkmark_path'] }}" fill="none" stroke="white" d="M1.73,12.91 8.1,19.28 22.79,4.59"></path>
        </svg>
        <div class="{{ $classList['mixedmark'] }}"></div>
    </div>
    <div class="{{ $classList['ripple'] }}"></div>
</div>
@if ($_label)
    <label id="{{ $_id }}-label" for="{{ $_id }}" class="{{ $classList['label'] }}">{{ $label }}</label>
@endif

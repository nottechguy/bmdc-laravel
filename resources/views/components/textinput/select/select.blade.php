@php
    $_id = $id ?? 'select-' . Illuminate\Support\Str::random(8);
    $_label = $label;
    $_value = $value ?? '';
    $_name = $name ?? $_id;
    $_leadingIcon = $leadingIcon;
    $_supportingText = $supportingText;
    $_persistentSupportingText = $persistentSupportingText;
    $_withError = $withError;
    $_disabled = $disabled;
    $_variant = $variant;
    $_required = $required;
    $_dense = $dense;
    $_readonly = $readonly;

    $_isRequired = ($_required == TRUE);

    $_hasHelperContent = ($_supportingText || $_withError);

@endphp

<div class="{{ $classNames() }}" data-variant="{{ $variant }}">
    <input 
        @class($classList['input'])
        id="{{ $_id }}"
        name="{{ $_name }}"
        value="{{ $_value }}"
        @if($_required) required @endif
        @if($_disabled) disabled @endif
        {{ $attributes->merge(['type' => 'hidden']) }}
        >

    <div class="{{ $classList['anchor'] }}" aria-labelledby="{{ $id }}">
        <i class="{{ $classList['dropdown_icon'] }}">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="5px" viewBox="7 10 10 5" version="1.1">
                <polygon id="Shape" stroke="none" fill="#000" fill-rule="evenodd" points="7 10 12 15 17 10"/>
            </svg>
        </i>
        @if($_leadingIcon)
            <x-bmdc-icon class="{{ $classList['icon'] }} {{ $classList['leading_icon'] }} {{ $_disabled ? $classList['icon_disabled'] : '' }}" name="{{ $_leadingIcon }}" />
        @endif
        <div class="{{ $classList['selected_text'] }}" tabindex="{{ $_disabled ? '-1' : '0' }}" aria-disabled="false" aria-expanded="false"></div>
        @if ($_variant === 'filled')
            @if ($_label !== '') 
                <span @class([ $classList['label'],  $classList['label_required'] => $_isRequired, $classList['label_floating_above'] => $isActivated($attributes)]) id="{{ $_id }}-label">{{ $_label }}</span>
            @endif
            <div class="{{ $classList['line_ripple'] }}"></div>
        @elseif ($_variant === 'outlined')
            <div @class([$classList['notched_outline'], $classList['notched_outline_notched'] => $isActivated($attributes)])>
                <div class="{{ $classList['notched_leading'] }}"></div>
                @if ($_label !== '') 
                    <div class="{{ $classList['notched_notch'] }}">
                        <span @class([ $classList['label'],  $classList['label_required'] => $_isRequired, $classList['label_floating_above'] => $isActivated($attributes)]) id="{{ $_id }}-label">{{ $_label }}</span>
                    </div>
                @endif
                <div class="{{ $classList['notched_trailing'] }}"></div>
            </div>
        @endif
    </div>
    
    <x-bmdc-menu type="exposed">
        @if ($_dense)
            <x-bmdc-list dense :no-selection="false">
                {{ $slot }}
            </x-bmdc-list>
        @else
            <x-bmdc-list :no-selection="false">
                {{ $slot }}
            </x-bmdc-list>
        @endif
    </x-bmdc-menu>
</div>

@if($_hasHelperContent)
    <div class="{{ $classList['helper_line'] }}">
        <p id="{{ $_id }}-supporting-text" @class([$classList['helper_text'], $classList['helper_text_persistent'] => $_persistentSupportingText]) aria-live="polite">
            @if($_supportingText || $_withError) {{-- Assuming error text is passed via supportingText if error is true --}}
                {{ $_supportingText }}
            @endif
        </p>
    </div>
@endif

@props([
    'id' => uniqid('textfield-'),
    'label' => 'Label',
    'type' => 'text',
    'value' => '',
    'name',
    'leadingIcon' => null,
    'trailingIcon' => null,
    'prefix' => null,
    'suffix' => null,
    'supportingText' => null,
    'persistentSupportingText' => null,
    'error' => false,
    'disabled' => false,
    'variant' => 'filled', // 'filled' or 'outlined'
    'required' => false
])

@php
    // Use values from PHP component class instance if available (during actual render)
    // This makes Blade preview tools work better if they don't instantiate the PHP class.
    $_id = $id ?? 'textfield-' . Illuminate\Support\Str::random(8);
    $_label = $label;
    $_type = $type;
    $_value = $value ?? '';
    $_name = $name ?? $_id; // Default name to id if not provided
    $_leadingIcon = $leadingIcon;
    $_trailingIcon = $trailingIcon;
    $_prefix = $prefix;
    $_persistentPrefix = ($_prefix && $persistentPrefix);
    $_suffix = $suffix;
    $_persistentSuffix = ($_suffix && $persistentSuffix);
    $_supportingText = $supportingText;
    $_persistentSupportingText = $persistentSupportingText;
    $_withError = $withError;
    $_disabled = $disabled;
    $_variant = $variant;
    $_required = $required;
    $_maxlength = $maxlength;
    $_pattern = $pattern;
    $_dense = $dense;
    $_readonly = $readonly;

    $_hasPattern = ($_pattern !== null);
 
    // Logic for 'activated' state
    $_isActivated = (!empty($_value) && $_value !== '') || old($_name) !== null || $attributes->has('autofocus');

    // Is textfield required
    $_isRequired = ($_required == TRUE);

    // Is the textfield a textarea?
    $_isTextarea = ($_type === 'textarea');

    // Determine if helper line has any content
    $_hasHelperContent = ($_supportingText || $_withError || $_maxlength);
    
    $_hasActionButton = isset($actionButton);

@endphp

<div @class([$classNames(), $classList['with_action_button'] => $_hasActionButton]) data-variant="{{ $variant }}">
    @if($_leadingIcon || $_prefix)
        @if ($_leadingIcon)
            <x-bmdc-icon class="{{ $classList['icon'] }} {{ $classList['leading_icon'] }} {{ $_disabled ? $classList['icon_disabled'] : '' }}" name="{{ $_leadingIcon }}" />
        @elseif ($_prefix)
            <span @class([
                $classList['affix'],
                $classList['prefix'],
                $classList['affix_persistent'] => $_persistentPrefix
            ])>{{ $_prefix }}</span>
        @endif
    @endif

    @if ($_isTextarea)
        <textarea id="{{ $_id }}" name="{{ $_name }}" class="{{ $classList['input'] }} {{ $_isActivated ? $classList['activated'] : '' }}"
        @if ($_maxlength) maxlength="{{ $_maxlength }}" @endif
        @if ($_hasPattern) pattern="{{ $_pattern }}" @endif
        @if ($_isRequired) required @endif
        @if ($_disabled) disabled @endif
        @if ($_label !== '') aria-labelledby="{{ $_id }}-label" @endif
        @if ($_readonly) tabindex="-1" @endif
        {{ $attributes->merge([
            'aria-describedby' => $_hasHelperContent ? ($_id . '-supporting-text') : null,
            'spellcheck' => 'false',
            'autocomplete' => 'off',
            'aria-invalid' => $_withError ? 'true' : 'false'
        ]) }} rows="4">{{ old($_name, $_value) }}</textarea>
    @else
        <input type="{{ $_type }}" id="{{ $_id }}" name="{{ $_name }}" class="{{ $classList['input'] }}"
        value="{{ old($_name, $_value) }}"
        @if ($_maxlength) maxlength="{{ $_maxlength }}" @endif
        @if ($_hasPattern) pattern="{{ $_pattern }}" @endif
        @if ($_isRequired) required @endif
        @if ($_label !== '') aria-labelledby="{{ $_id }}-label" @endif
        @if ($_readonly) tabindex="-1" @endif
        {{ $_disabled ? 'disabled' : '' }}
        {{ $attributes->merge([
            'aria-describedby' => $_hasHelperContent ? ($_id . '-supporting-text') : null, // Only describe if helper text or counter exists
            'aria-invalid' => $_withError ? 'true' : 'false'
        ]) }}/>
        
        @if ($type == 'file')
            <div class="{{ $classList['input_file_container'] }}">
                <span class="{{ $classList['input_file_label'] }}"></span><span class="{{ $classList['input_file_size'] }}"></span>
            </div>
        @endif
    @endif

    @if ($_variant === 'filled')
        @if ($_label !== '') 
            <label for="{{ $_id }}" @class([ $classList['label'],  $classList['label_required'] => $_isRequired, $classList['label_floating_above'] => $isActivated($attributes)]) id="{{ $_id }}-label">{{ $_label }}</label>
        @endif
        <div class="{{ $classList['line_ripple'] }}"></div>
    @elseif ($_variant === 'outlined')
        <div @class([$classList['notched_outline'], $classList['notched_outline_notched'] => $isActivated($attributes)])>
            <div class="{{ $classList['notched_leading'] }}"></div>
            @if ($_label !== '') 
                <div class="{{ $classList['notched_notch'] }}">
                    <label for="{{ $_id }}" @class([ $classList['label'],  $classList['label_required'] => $_isRequired, $classList['label_floating_above'] => $isActivated($attributes)]) id="{{ $_id }}-label">{{ $_label }}</label>
                </div>
            @endif
            <div class="{{ $classList['notched_trailing'] }}"></div>
        </div>
    @endif

    @if($_trailingIcon || $_suffix || $_hasActionButton)
        @if ($_trailingIcon)
            <x-bmdc-icon class="{{ $classList['icon'] }} {{ $classList['trailing_icon'] }} {{ $_disabled ? $classList['icon_disabled'] : '' }}" name="{{ $_trailingIcon }}" />
        @elseif ($_suffix)
             <span @class([
                $classList['affix'],
                $classList['suffix'],
                $classList['affix_persistent'] => $_persistentSuffix
            ])>{{ $_suffix }}</span>
        @elseif ($_hasActionButton)
            {{ $actionButton }}
        @endif
    @endif

</div>

@if($_hasHelperContent)
    <div class="{{ $classList['helper_line'] }}">
        <p id="{{ $_id }}-supporting-text" @class([$classList['helper_text'], $classList['helper_text_persistent'] => $_persistentSupportingText]) aria-live="polite">
            @if($_supportingText || $_withError) {{-- Assuming error text is passed via supportingText if error is true --}}
                {{ $_supportingText }}
            @endif
        </p>
        @if($_maxlength)
            <div class="{{ $classList['character_counter'] }}" id="{{ $_id }}-character-counter">
                {{ strlen(old($_name, $_value)) }} / {{ $_maxlength }}
            </div>
        @endif
    </div>
@endif

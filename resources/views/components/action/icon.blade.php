@aware([
    'classList'
])

@props([
    'name',
    'on'
])

@php
    $_on = $on; // Used by icon button

    $_classList = $classList;
    $_isParentIconButton = is_array($_classList) && array_key_exists('container', $_classList) && $_classList['container'] == 'c_icon-button';
    $_className = $classNames();

    if ($_isParentIconButton) {
        $_className .= " " . $_classList['icon'];

        if ($on) {
            $_className .= " " . $_classList['icon_on'];
        }
    }

@endphp

<i {{ $attributes->merge([
    'class' => $_className
]) }} data-icon="{{ $name }}">
    {!! $name !!}
</i>

<x-bmdc-list-item 
    {{ $attributes->merge([
        'role' => 'option',
        'data-value' => $value]
    ) }} 
    text="{{ $slot }}"></x-bmdc-list-item>

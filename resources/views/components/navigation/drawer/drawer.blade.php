@props([
    'title',
    'subtitle',
    'type'
])

<aside class="{{ $classNames() }}" {{ $attributes->merge([]) }}>
    @if ($title !== '' || $subtitle !== '')
        <div class="{{ $classList['header'] }}">
            <div class="{{ $classList['title'] }}">{{ $title }}</div>
            <div class="{{ $classList['subtitle'] }}">{{ $subtitle }}</div>
        </div>
    @endif
    <div class="{{ $classList['content'] }}">
        <nav class="{{ $classList['list'] }}">{{ $slot }}</nav>
    </div>
</aside>

@if ($type == 'modal')
    <div class="{{ $classList['scrim'] }}"></div>
@endif
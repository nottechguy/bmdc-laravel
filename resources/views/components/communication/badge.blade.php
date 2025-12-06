@props([
    'count'
])

<span class="{{ $classNames() }}">
    @if ($count > 1 && $count < 99)
        {{ $count }}
    @elseif ($count > 99)
        {{ "99+" }}
    @endif 
</span>

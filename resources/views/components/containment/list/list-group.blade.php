<div class="{{ $classNames() }}">
    @if ($subheader !== NULL)
        <h3 class="{{ $classList['subheader'] }}">{{ $subheader}}</h3>
    @endif
    {{ $slot }}
</div>

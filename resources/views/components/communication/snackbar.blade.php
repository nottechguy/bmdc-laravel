<div id="{{ $id }}" class="{{ $classNames() }}" {{ $attributes->merge([]) }}>
    <div class="{{ $classList['surface'] }}">
        <div class="{{ $classList['label'] }}" role="status" aria-live="polite">{{ $label }}</div>
        <div class="{{ $classList['actions'] }}">
            @if ($action)
                <x-bmdc-button class="{{ $classList['action'] }}">{{ $action }}</x-bmdc-button>
            @endif
            <x-bmdc-icon-button class="{{ $classList['dismiss'] }} material-icons ">close</x-bmdc-icon-button>
        </div>
    </div>
</div>

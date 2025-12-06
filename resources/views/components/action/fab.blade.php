<button {{ $attributes->merge(["class" => $classNames(), "type" => "button"]) }}>
    @if ($icon !== "")
        <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $icon }}" />
    @endif
    @if ($label !== "")
        <span class="{{ $classList['label'] }}">{{ $label }}</span>
    @endif
    <x-bmdc-ripple class="{{ $classList['ripple'] }}" />
</button>

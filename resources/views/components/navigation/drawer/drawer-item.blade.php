<a
    @class([
        $classList['container'],
        $classList['activated'] => $activated,
        $classList['disabled'] => $disabled,
    ])
    href="{{ $disabled ? null : ($href ?? '#') }}"
    @if($activated) aria-current="page" @endif
    @if($disabled) aria-disabled="true" tabindex="-1" @endif
    {{ $attributes }}
>
    @if ($icon !== null)
        <x-bmdc-icon class="{{ $classList['icon'] }}" name="{{ $icon }}" />
    @endif

    <span class="{{ $classList['text'] }}">
        {{ $text }}
    </span>

    @if ($badge !== null)
        <span class="{{ $classList['supporting_text'] }}">
            {{ $badge }}
        </span>
    @endif
</a>

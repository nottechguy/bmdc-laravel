@props([
    'id' => uniqid('dialog-'),
    'title',
    'type',
    'isAcknowledgement',
    'negativeButton',
    'positiveButton'
])

@php
    $_id = $id ?? 'dialog-' . Illuminate\Support\Str::random(8);
    $_isFormContent = isset($form) && $form->attributes->has('formID');
    $_hasConfirmationList = isset($confirmationList);

    // Base attributes
    $_dialogAttributes = [
        'role' => $type === 'fullscreen' ? 'dialog' : 'alertdialog',
        'id' => $_id,
        'aria-modal' => 'true',
        'aria-describedby' => $_id . '-description',
    ];

    if ($type !== 'alert' && $title !== null) {
        $_dialogAttributes['aria-labelledby'] = $_id . '-label';
    }

    // Button attributes
    $_positiveButtonAttributes = [
        'class' => $classList['button'] . ' ' . $classList['positive_button'],
        'type'  => $_isFormContent ? 'submit' : 'button',
        'data-dialog-action' => 'accept',
        'form' => $_isFormContent ? $form->attributes->get('formID') : ''
    ];

    if ($type === 'confirmation' && $_hasConfirmationList && $confirmationList->attributes->has('defaultSelection')) {
        $_positiveButtonAttributes['disabled'] = 'true';
    }
@endphp

<div {{ $attributes->merge($_dialogAttributes)->class($classNames()) }}>
    <div class="{{ $classList['scrim'] }}"></div>

    <div class="{{ $classList['container'] }}">
        <div class="{{ $classList['surface'] }}">
            @if ($title !== null)
                <div id="{{ $_id }}-label" class="{{ $classList['title'] }}">{{ $title }}</div>
            @endif

            <div id="{{ $_id }}-description" class="{{ $classList['content'] }}">
                @if ($_isFormContent)
                    {{ $form }}
                @elseif($_hasConfirmationList)
                    {{ $confirmationList }}
                @else
                    {{ $slot }}
                @endif
            </div>

            @if ($type !== 'simple')
                <div class="{{ $classList['actions'] }}">
                    @if ($negativeButton !== null)
                        <x-bmdc-button
                            class="{{ $classList['button'] }} {{ $classList['negative_button'] }}"
                            type="button"
                            data-dialog-action="close">
                            {{ $negativeButton }}
                        </x-bmdc-button>
                    @endif

                    <x-bmdc-button {{ $attributes->merge($_positiveButtonAttributes) }}>
                        {{ $positiveButton }}
                    </x-bmdc-button>
                </div>
            @endif
        </div>
    </div>
</div>

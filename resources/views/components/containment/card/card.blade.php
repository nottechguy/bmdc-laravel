@props([
    'type',
    'id' => uniqid('card-'),
    'variant',
    'orientation',
    'title',
    'subtitle',
    'secondary'
])

@php
    $_id = $id ?? 'card-' . Illuminate\Support\Str::random(8);
    $hasButtons = isset($buttons);
    $hasIcons = isset($icons);
    $hasActions = isset($actions);

    $hasMediaActions = isset($mediaActions);
    $canExpand = isset($expand);
@endphp

<div class="{{ $classNames() }}">
    @if ($type == 'with_header')

        <div class="{{ $classList['primary'] }}">
        
            @if ($thumbnailSrc !== null)
                <img src="{{ $thumbnailSrc }}" class="{{ $classList['thumbnail'] }}">
            @endif

            @if ($title !== null)
                <h2 class="{{ $classList['title'] }}  c_typography--headline6">{{ $title }}</h2>
            @endif

            @if ($subtitle !== null)
                <h3 class="{{ $classList['subtitle'] }} c_typography--subtitle2">{{ $subtitle }}</h3>
            @endif
        </div>
    @endif

    <div class="{{ $classList['primary_action'] }}" tabindex="0">
        @if ($mediaSrc !== null)
            <div @class([$classList['media'], $classList['media_16_9'] => ($orientation == 'vertical'), $classList['media_square'] => ($orientation == 'horizontal')]) style="background-image:url({{ $mediaSrc }})">

                @if ($hasMediaActions)
                    <div class="{{ $classList['media_actions'] }}">{!! $mediaActions !!}</div>
                @endif

                @if ($type == 'text_over_media')
                    <div class="{{ $classList['media_content'] }}">
                        <div class="{{ $classList['primary'] }}">
                            @if ($thumbnailSrc !== null)
                                <img src="{{ $thumbnailSrc }}" class="{{ $classList['thumbnail'] }}">
                            @endif

                            @if ($title !== null)
                                <h2 class="{{ $classList['title'] }} c_typography--headline6">{{ $title }}</h2>
                            @endif

                            @if ($subtitle !== null)
                                <h3 class="{{ $classList['subtitle'] }} c_typography--subtitle2">{{ $subtitle }}</h3>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
            
            @if ($type == 'standard')
                <div class="{{ $classList['primary'] }}">
                
                    @if ($thumbnailSrc !== null)
                        <img src="{{ $thumbnailSrc }}" class="{{ $classList['thumbnail'] }}">
                    @endif

                    @if ($title !== null)
                        <h2 class="{{ $classList['title'] }} c_typography--headline6">{{ $title }}</h2>
                    @endif

                    @if ($subtitle !== null)
                        <h3 class="{{ $classList['subtitle'] }} c_typography--subtitle2">{{ $subtitle }}</h3>
                    @endif
                </div>
            @endif
        @else
            @if ($type !== 'with_header')
                <div class="{{ $classList['primary'] }}">
                
                    @if ($thumbnailSrc !== null)
                        <img src="{{ $thumbnailSrc }}" class="{{ $classList['thumbnail'] }}">
                    @endif

                    @if ($title !== null)
                        <h2 class="{{ $classList['title'] }} c_typography--headline6">{{ $title }}</h2>
                    @endif

                    @if ($subtitle !== null)
                        <h3 class="{{ $classList['subtitle'] }} c_typography--subtitle2">{{ $subtitle }}</h3>
                    @endif
                </div>
            @endif
        @endif

        @if (isset($supportingText))
            <div class="{{ $classList['secondary'] }} c_typography--body2">{!! $supportingText !!}</div>
        @endif
    </div>

    @if (isset($additionalActions))
        <x-bmdc-card-divider />
        <div class="{{ $classList['aditional_actions'] }}">{!! $additionalActions !!}</div>
    @endif

    @if ($hasActions)
        <div class="{{ $classList['actions'] }}">
            @if ($hasButtons)
                <div class="{{ $classList['action_buttons'] }}">{!! $buttons !!}</div>
            @endif
                
            @if ($hasIcons)
                <div class="{{ $classList['action_icons'] }}">{!! $icons !!}</div>
            @endif
        </div>
    @endif
</div>

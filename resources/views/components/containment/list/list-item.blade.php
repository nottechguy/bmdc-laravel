@props([
    'itemType',
    'text',
    'secondaryText',
    'avatar',
    'image',
    'thumbnail',
    'leadingIcon',
    'trailingIcon',
    'trailingSupportingText',
    'href',
    'disabled',
    'activated',
    'nonInteractive'
])

@aware([
    'type'
])

@php
    $_hasInnerList = isset($list);
    $_isInnerListCollapsed = $_hasInnerList && !$list->attributes->has('expanded');

    $_isMultipleLineType = $type == 'two_line' || 'three_line';
    $_hasSecondaryText = $secondaryText !== null;

    $_hasMedia = ($avatar !== NULL || $image !== NULL || $thumbnail || $leadingIcon !== NULL);
    $_hasSelectionControl = isset($leadingControl) || isset($trailingControl);

    $_hasTrailingSupportingText = $trailingSupportingText !== NULL;
    $_isLink = $itemType == 'link';

    $_startTag = $_isLink && $href !== NULL ? "a" : "li";
    $_endTag = $_isLink && $href !== NULL ? "a" : "li";
@endphp

<{{ $_startTag }} 
    @class([
        $classList['container'],
        $classList['disabled'] => $attributes->has('disabled'),
        $classList['activated'] => $activated,
        $classList['with_collapsed_list'] => $_isInnerListCollapsed
    ]) 
    @if ($href !== NULL) href={{ $href }} target="_blank" @endif 
    @if ($activated) tabindex="0" @endif 
    @if ($attributes->has('disabled')) aria-disabled="true" @endif

    @if ($_hasSelectionControl) 
        @if (isset($leadingControl)) role="{{ $leadingControl->attributes->get('type') }}" @endif
        @if (isset($trailingControl)) role="{{ $trailingControl->attributes->get('type') }}" @endif
    @endif

    @if ($_hasSelectionControl)
        aria-checked="{{ $activated ? 'true' : 'false' }}"
    @endif

    {{ $attributes->merge([
    ]) }}>

    @if ($_hasMedia || $_hasSelectionControl)
        @if (isset($leadingControl) && !isset($trailingControl))
            <span class="{{ $classList['meta'] }} {{ $classList['meta_align_start'] }}">
                {{ $leadingControl }}
            </span>
        @else
            @if ($avatar !== NULL)
                <img class="{{ $classList['avatar'] }} {{ $classList['graphic'] }}" src="{{ $avatar }}" alt="">
            @elseif ($image !== NULL)
                <img class="{{ $classList['image'] }} {{ $classList['graphic'] }}" src="{{ $image }}" alt="">
            @elseif ($thumbnail !== NULL)
            @elseif ($leadingIcon !== NULL)
                <x-bmdc-icon class="{{ $classList['leading_icon'] }}" name="{{ $leadingIcon }}" />
            @endif
        @endif
    @endif

    @if ($_isMultipleLineType && $_hasSecondaryText)
        <span class="{{ $classList['text'] }}">
            <span class="{{ $classList['primary_text'] }}">{{ $text }}</span>
            <span class="{{ $classList['secondary_text'] }}">{{ $secondaryText }}</span>
        </span>
    @else
        {{ $text }}
    @endif
    
    @if ($_hasTrailingSupportingText)
        <span class="{{ $classList['trailing_supporting_text'] }}">{{ $trailingSupportingText }}</span>
    @endif

    @if ($_hasInnerList || $trailingIcon !== NULL || $_isLink || isset($trailingControl))
        <span class="{{ $classList['meta'] }}">
            @if ($_hasInnerList)
                <x-bmdc-icon data-action="{{ $_isInnerListCollapsed ? 'expand' : 'collapse' }}" name="{{ $_isInnerListCollapsed ? 'expand_more' : 'expand_less' }}" />
            @elseif (isset($trailingControl) && !isset($leadingControl))
                {{ $trailingControl }}
            @else
                @if ($trailingIcon || ($_isLink && isset($target) && $target == '_blank'))
                    <x-bmdc-icon aria-hidden="true" name="{{ $_isLink ? 'link' : $trailingIcon }}" />
                @endif
            @endif
        </span>
    @endif
</{{ $_endTag }}>
@if ($_hasInnerList)
    <div @class([
        $classList['inner_list'],
        $classList['inner_list_collapsed'] => $_isInnerListCollapsed
    ])>{{ $list }}</div>
@endif

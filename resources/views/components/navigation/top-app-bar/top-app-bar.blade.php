@props([
    'variant',
    'title',
    'subtitle',
    'logo',
    'logoAlt',
    'centerTitle',
    'fixed',
    'prominent',
    'dense',
    'searchMode',
    'searchCollapsible',
    'searchPlaceholder',
    'searchWidth',
    'scrollBehavior',
    'navigationIcon',
    'navigationLabel' => 'Menu',
    'searchValue' => ''
])

@php
    $isSearch = $isSearchMode();
    $isCenterAligned = $variant === 'center-aligned' || $centerTitle;
    $customWidth = !in_array($searchWidth, ['adaptive', 'full']) ? $searchWidth : null;
@endphp

<header {{ $attributes->merge(['class' => $classNames()]) }} 
        data-top-app-bar
        @if(!empty($scrollBehavior))
        data-scroll-behavior="{{ $getScrollBehaviorData() }}"
        @endif
        @if($isSearch)
        data-search-mode
        data-search-width="{{ $searchWidth }}"
        @if($searchCollapsible)
        data-search-collapsible
        @endif
        @endif
        role="banner">
    <div class="{{ $classList['row'] }}">
        @if($isSearch && $searchCollapsible)
            {{-- Collapsible Search Mode: Shows trigger button on mobile --}}
            <section class="{{ $classList['section'] }} {{ $classList['section_align_start'] }}">
                @if($navigationIcon !== null)
                    <button class="{{ $classList['navigation_icon'] }} c_icon-button" 
                            type="button"
                            aria-label="{{ $navigationLabel }}"
                            data-navigation-icon>
                        <x-bmdc-icon :name="$navigationIcon" />
                        <span class="c_ripple"></span>
                    </button>
                @endif
                
                {{-- Search Trigger (visible when collapsed) --}}
                <button class="{{ $classList['search_trigger'] }}"
                        type="button"
                        aria-label="Open search"
                        data-search-trigger>
                    <span>{{ $searchPlaceholder }}</span>
                </button>
            </section>
            
            {{-- Search Container (hidden initially on mobile) --}}
            <div class="{{ $classList['search_container'] }}"
                 @if($customWidth)
                 style="max-width: {{ $customWidth }};"
                 @endif
                 data-search-bar>
                <button class="{{ $classList['navigation_icon'] }} c_icon-button" 
                        type="button"
                        aria-label="Close search"
                        data-search-close>
                    <x-bmdc-icon name="arrow_back" />
                    <span class="c_ripple"></span>
                </button>
                
                <x-bmdc-icon class="{{ $classList['search_icon'] }}" name="search" />
                
                <input 
                    type="search" 
                    class="{{ $classList['search_input'] }}"
                    placeholder="{{ $searchPlaceholder }}"
                    value="{{ $searchValue }}"
                    aria-label="Search"
                    data-search-input
                    autocomplete="off">
                
                <button 
                    class="{{ $classList['search_clear'] }} c_icon-button" 
                    type="button"
                    aria-label="Clear search"
                    data-search-clear
                    style="display: none;">
                    <x-bmdc-icon name="close" />
                    <span class="c_ripple"></span>
                </button>
            </div>
            
            <section class="{{ $classList['section'] }} {{ $classList['section_align_end'] }}" 
                     role="toolbar"
                     aria-label="Actions">
                {{ $slot }}
            </section>
            
        @elseif($isSearch && !$searchCollapsible)
            {{-- Non-collapsible Search Mode: Always shows search bar --}}
            <section class="{{ $classList['section'] }} {{ $classList['section_align_start'] }}">
                @if($navigationIcon !== null)
                    <button class="{{ $classList['navigation_icon'] }} c_icon-button" 
                            type="button"
                            aria-label="{{ $navigationLabel }}"
                            data-navigation-icon>
                        <x-bmdc-icon :name="$navigationIcon" />
                        <span class="c_ripple"></span>
                    </button>
                @endif
            </section>
            
            <div class="{{ $classList['search_container'] }}"
                 @if($customWidth)
                 style="max-width: {{ $customWidth }};"
                 @endif
                 data-search-bar>
                <button class="{{ $classList['navigation_icon'] }} c_icon-button" 
                        type="button"
                        aria-label="Close search"
                        data-search-close
                        style="display: none;">
                    <x-bmdc-icon name="arrow_back" />
                    <span class="c_ripple"></span>
                </button>
                
                <x-bmdc-icon class="{{ $classList['search_icon'] }}" name="search" />
                
                <input 
                    type="search" 
                    class="{{ $classList['search_input'] }}"
                    placeholder="{{ $searchPlaceholder }}"
                    value="{{ $searchValue }}"
                    aria-label="Search"
                    data-search-input
                    autocomplete="off">
                
                <button 
                    class="{{ $classList['search_clear'] }} c_icon-button" 
                    type="button"
                    aria-label="Clear search"
                    data-search-clear
                    style="display: none;">
                    <x-bmdc-icon name="close" />
                    <span class="c_ripple"></span>
                </button>
            </div>
            
            <section class="{{ $classList['section'] }} {{ $classList['section_align_end'] }}" 
                     role="toolbar"
                     aria-label="Actions">
                {{ $slot }}
            </section>
            
        @elseif($isCenterAligned)
            {{-- Center-Aligned Layout --}}
            <section class="{{ $classList['section'] }} {{ $classList['section_align_start'] }}">
                @if($navigationIcon)
                    <button class="{{ $classList['navigation_icon'] }} c_icon-button" 
                            type="button"
                            aria-label="{{ $navigationLabel }}"
                            data-navigation-icon>
                        <x-bmdc-icon :name="$navigationIcon" />
                        <span class="c_ripple"></span>
                    </button>
                @endif
            </section>
            
            {{-- Centered Title/Logo --}}
            @if($hasLogo())
                <img src="{{ $logo }}" 
                     alt="{{ $logoAlt }}" 
                     class="{{ $classList['logo'] }}"
                     role="img"
                     aria-label="{{ $logoAlt }}">
            @elseif($title || $subtitle)
                <div class="{{ $classList['title_container'] }}">
                    @if($title)
                        <span class="{{ $classList['headline'] }}" id="app-bar-title">{{ $title }}</span>
                    @endif
                    @if($hasSubtitle())
                        <span class="{{ $classList['subtitle'] }}" aria-describedby="app-bar-title">{{ $subtitle }}</span>
                    @endif
                </div>
            @endif
            
            <section class="{{ $classList['section'] }} {{ $classList['section_align_end'] }}" 
                     role="toolbar"
                     aria-label="Actions">
                {{ $slot }}
            </section>
            
        @else
            {{-- Standard Layout --}}
            <section class="{{ $classList['section'] }} {{ $classList['section_align_start'] }}">
                @if($navigationIcon !== null)
                    <button class="{{ $classList['navigation_icon'] }} c_icon-button" 
                            type="button"
                            aria-label="{{ $navigationLabel }}"
                            data-navigation-icon>
                        <x-bmdc-icon :name="$navigationIcon" />
                        <span class="c_ripple"></span>
                    </button>
                @endif
                
                @if($hasLogo())
                    <img src="{{ $logo }}" 
                         alt="{{ $logoAlt }}" 
                         class="{{ $classList['logo'] }}"
                         role="img"
                         aria-label="{{ $logoAlt }}">
                @elseif($title || $subtitle)
                    <div class="{{ $classList['title_container'] }}">
                        @if($title)
                            <span class="{{ $classList['headline'] }}" id="app-bar-title">{{ $title }}</span>
                        @endif
                        @if($hasSubtitle())
                            <span class="{{ $classList['subtitle'] }}" aria-describedby="app-bar-title">{{ $subtitle }}</span>
                        @endif
                    </div>
                @endif
            </section>
            
            <section class="{{ $classList['section'] }} {{ $classList['section_align_end'] }}" 
                     role="toolbar"
                     aria-label="Actions">
                {{ $slot }}
            </section>
        @endif
    </div>
</header>

@if($fixed)
    {{-- Add spacing for fixed app bars --}}
    <div class="@if($prominent){{ $classList['prominent_fixed_adjust'] }}@elseif($dense){{ $classList['dense_fixed_adjust'] }}@else{{ $classList['fixed_adjust'] }}@endif"></div>
@endif
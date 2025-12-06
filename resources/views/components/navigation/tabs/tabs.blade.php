@props([
    'align',
    'alignments'
])

<div {{ $attributes->merge(['class' => $classNames()]) }} role="tablist" data-tab-scroller>
    <div class="{{ $scrollerClassNames() }}" data-scroller>
        <div class="{{ $scrollAreaClassNames() }}"  data-scroll-area>
            <div class="{{ $classList['scroller_content'] }}" data-scroll-content>
                {{ $slot  }}
            </div>
        </div>
    </div>
</div>

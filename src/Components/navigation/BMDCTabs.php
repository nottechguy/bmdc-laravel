<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCTabs extends Component {
    public string $type;
    public string $align;
    public bool $scrollable;

    public array $classList = [
        'container'             => 'c_tab-bar',
        'primary'               => 'c_tab-bar--primary',
        'secondary'             => 'c_tab-bar--secondary',
        'scroller'              => 'c_tab-scroller',
        'scroller_align_start'  => 'c_tab-scroller--align-start',
        'scroller_align_center' => 'c_tab-scroller--align-center',
        'scroller_align_end'    => 'c_tab-scroller--align-end',
        'scroller_area'         => 'c_tab-scroller__scroll-area',
        'scroller_area_scroll'  => 'c_tab-scroller__scroll-area--scroll',
        'scroller_content'      => 'c_tab-scroller__scroll-content'
    ];

    public array $alignments = [
        'start', 'center', 'end'
    ];

    public function __construct(
        $type = 'primary', ?string $align = '', ?bool $scrollable = true
        ) {
        $this->type  = $type;
        $this->align = $align;
        $this->scrollable = $scrollable;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->type === 'primary') {
            $classes[] = $this->classList['primary'];
        } elseif ($this->type === 'secondary') {
            $classes[] = $this->classList['secondary'];
        }

        return implode(' ', $classes);
    }

    public function scrollerClassNames() {
        $classes = [$this->classList['scroller']];

        if (in_array($this->align, $this->alignments)) {
            $classes[] = $this->classList['scroller_align_' . $this->align];
        }

        return implode(' ', $classes);
    }

    public function scrollAreaClassNames() {
        $classes = [$this->classList['scroller_area']];
        if ($this->scrollable) {
            $classes[] = $this->classList['scroller_area_scroll'];
        }
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.tabs.tabs');
    }
}

<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;
use PHPUnit\Framework\Constraint\IsFalse;

class BMDCTab extends Component {

    public ?string $label;
    public ?string $icon;

    public ?int $badge;

    public bool $selected;
    public bool $stacked;
    public array $classList = [
        'container'             => 'c_tab',
        'min_width'             => 'c_tab--min-width',
        'selected'              => 'c_tab--selected',
        'disabled'              => 'c_tab--disabled',
        'focused'               => 'c_tab--focused',
        'stacked'               => 'c_tab--stacked',
        'active'                => 'c_tab--active',
        'content'               => 'c_tab__content',
        'label'                 => 'c_tab__text-label',
        'icon'                  => 'c_tab__icon',
        'badge'                 => 'c_tab__badge',
        'badge_small'           => 'c_tab__badge--small',
        'badge_single_digit'    => 'c_tab__badge--single-digit',
        'badge_large'           => 'c_tab__badge--large',
        'indicator'             => 'c_tab-indicator',
        'indicator_active'      => 'c_tab-indicator--active',
        'indicator_content'     => 'c_tab-indicator__content',
        'indicator_underline'   => 'c_tab-indicator__content--underline',
        'ripple'                => 'c_ripple c_tab__ripple',
        'ripple_upgraded'       => 'c_ripple-upgraded'
    ];

    public function __construct(
        ?string $label = '',
        ?string $icon = '',
        ?int $badge = 0,
        ?bool $selected = FALSE,
        ?bool $stacked = FALSE
    ) {
        $this->label = $label;
        $this->icon  = $icon;
        $this->badge = (int) $badge ?? 0;
        $this->selected = $selected;
        $this->stacked = $stacked;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->selected) {
            $classes[] = $this->classList['active'];
        }

        if ($this->stacked) {
            $classes[] = $this->classList['stacked'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.tabs.tab');
    }
}

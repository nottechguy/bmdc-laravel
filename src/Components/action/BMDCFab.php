<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;

class BMDCFab extends Component {

    public $variant;
    public $size;
    public string $label = '';
    public string $icon = '';
    
    public bool $noRipple;

    public array $classList = [
        'fab'               => 'c_fab',
        'surface'           => 'c_fab--surface',
        'icon'              => 'c_fab__icon',
        'label'             => 'c_fab__label',
        'ripple'            => 'c_fab__ripple',
        'variant_extended'  => 'c_fab--extended',
        'size_small'        => 'c_fab--mini',
        'size_medium'       => 'c_fab--medium',
        'size_large'        => 'c_fab--large'
    ];


    public function __construct(
        $variant = '',
        $size = 'medium',
        $label = '',
        $icon = '',
        ?bool $noRipple = false
    ) {
        $this->variant = $variant;
        $this->size = $size;
        $this->label = $label;
        $this->icon = $icon;
        $this->noRipple = $noRipple;
    }

    public function classNames() {
        $classes = [$this->classList['fab']];

        if ($this->variant == 'extended' || $this->label !== '') {
            $classes[] = $this->classList['variant_extended'];
        }
        
        if ($this->size == 'small') {
            $classes[] = $this->classList['size_small'];
        }

        if ($this->size == 'medium') {
            $classes[] = $this->classList['size_medium'];
        }

        if ($this->size == 'large') {
            $classes[] = $this->classList['size_large'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.action.fab');
    }
}

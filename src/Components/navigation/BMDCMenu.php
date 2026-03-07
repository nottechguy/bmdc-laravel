<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCMenu extends Component {
    public string $type;
    public string $align;

    public array $classList = [
        'container'         => 'c_menu',
        'exposed'           => 'c_menu--exposed',
        'end_aligned'       => 'c_menu--end-aligned',
        'surface'           => 'c_menu-surface',
        'surface_open'      => 'c_menu-surface--open'
    ];

    public function __construct(
        string $type = 'dropdown',
        string $align = 'left'
        ) {
        $this->type  = $type;
        $this->align = $align;
    }

    public function classNames() {
        $classes = [$this->classList['container'], $this->classList['surface']];
        
        if ($this->type == 'exposed') {
            $classes[] = $this->classList['exposed'];
        }

        if ($this->align == 'right') {
            $classes[] = $this->classList['end_aligned'];
        }
        
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.menu.menu');
    }
}

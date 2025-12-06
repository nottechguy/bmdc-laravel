<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCMenu extends Component {
    public string $type;

    public array $classList = [
        'container'         => 'c_menu',
        'exposed'           => 'c_menu--exposed',
        'surface'           => 'c_menu-surface',
        'surface_open'      => 'c_menu-surface--open'
    ];

    public function __construct(
        string $type = 'dropdown'
        ) {
        $this->type  = $type;
    }

    public function classNames() {
        $classes = [$this->classList['container'], $this->classList['surface']];
        
        if ($this->type == 'exposed') {
            $classes[] = $this->classList['exposed'];
        }
        
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.menu.menu');
    }
}

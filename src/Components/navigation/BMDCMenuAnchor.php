<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCMenuAnchor extends Component {

    public array $classList = [
        'container'         => 'c_menu-surface--anchor'
    ];

    public function __construct() { 
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.menu.menu-anchor');
    }
}

<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;

class BMDCRipple extends Component {

    public $color;
    public function __construct($color = 'rgba(0, 0, 0, 0.1)') {
        $this->color = $color;
    }

    public function classNames() {
        return 'c_ripple';
    }

    public function render() {
        return view('bmdc::components.action.ripple');
    }
}

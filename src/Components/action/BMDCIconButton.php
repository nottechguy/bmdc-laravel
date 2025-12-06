<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;

class BMDCIconButton extends Component {
    public bool $noRipple;
    public array $classList = [
        'container'     => 'c_icon-button',
        'button_on'     => 'c_icon-button--on',
        'icon'          => 'c_icon-button__icon',
        'icon_on'       => 'c_icon-button__icon--on',
        'ripple'        => 'c_icon-button__ripple'
    ];

    public function __construct($noRipple = false) {
        $this->noRipple = $noRipple;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.action.icon-button');
    }
}

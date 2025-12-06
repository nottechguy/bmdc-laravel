<?php

namespace BMDC\Components\containment;

use Illuminate\View\Component;

class BMDCListDivider extends Component {

    public bool $group;

    public array $classList = [
        'container'         => 'c_list-divider',
    ];

    public function __construct(bool $group = false) {
        $this->group = $group;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.containment.list.list-divider');
    }
}

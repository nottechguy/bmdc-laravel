<?php

namespace BMDC\Components\containment;

use Illuminate\View\Component;

class BMDCListGroup extends Component {

    public ?string $subheader;

    public array $classList = [
        'container'     => 'c_list-group',
        'subheader'     => 'c_list-group__subheader'
    ];

    public function __construct(?string $subheader = null) {
        $this->subheader = $subheader;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.containment.list.list-group');
    }
}

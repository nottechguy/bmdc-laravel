<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;

class BMDCIcon extends Component {

    public string $name = "";
    public ?bool $on;

    public function __construct($name = "", ?bool $on = false) {
        $this->name = $name;
        $this->on = $on;
    }
    public function classNames() {
        return "material-icons";
    }
    public function render() {
        return view('bmdc::components.action.icon');
    }
}

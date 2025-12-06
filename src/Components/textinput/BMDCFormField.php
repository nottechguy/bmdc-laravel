<?php

namespace BMDC\Components\textinput;

use Illuminate\View\Component;

class BMDCFormField extends Component {

    public ?string $alignment;
    public ?bool $nowrap;

    public array $classList = [
        'container'     => 'c_form-field',
        'align_end'     => 'c_form-field--align-end',
        'nowrap'        => 'c_form-field--nowrap',
    ];

    public function __construct(
        ?string $alignment = null,
        ?bool $nowrap = false
    ) {
        $this->alignment = $alignment;
        $this->nowrap = $nowrap;
    }

    public function classNames() {
        $classes[] = $this->classList['container'];
        if ($this->alignment === 'end') {
            $classes[] = $this->classList['align_end'];
        }

        if ($this->nowrap) {
            $classes[] = $this->classList['nowrap'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.textinput.form-field');
    }
}

<?php

namespace BMDC\Components\selection;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class BMDCRadioButton extends Component {
    public string $id;

    public string $name;

    public ?string $label;
    public bool $checked;
    public bool $disabled;

    public array $classList = [
        'container'         => 'c_radio',
        'checked'           => 'c_radio--selected',
        'disabled'          => 'c_radio--disabled',
        'focused'           => 'c_radio--focused',
        'input'             => 'c_radio__native-control',
        'label'             => 'c_radio__label',
        'background'        => 'c_radio__background',
        'inner_circle'      => 'c_radio__inner-circle',
        'outer_circle'      => 'c_radio__outer-circle',
        'ripple'            => 'c_ripple c_radio__ripple',
    ];

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $label = null,
        bool $checked = false,
        bool $disabled = false,
    ) {
        $this->id = $id ?? 'radio-button-' . Str::random(8);
        $this->name = $name ?? $this->id;
        $this->label = $label;
        $this->checked = $checked;
        $this->disabled = $disabled;
    }

    public function classNames() {  
        $classes[] = $this->classList['container'];

        if ($this->checked) {
            $classes[] = $this->classList['checked'];
        }
        if ($this->disabled) {
            $classes[] = $this->classList['disabled'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.selection.radio-button');
    }
}

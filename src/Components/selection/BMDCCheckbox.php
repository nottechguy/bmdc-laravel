<?php

namespace BMDC\Components\selection;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class BMDCCheckbox extends Component {
    public string $id;

    public string $name;

    public ?string $label;
    public bool $checked;
    public bool $disabled;
    public ?bool $required;
    public ?bool $indeterminate;

    public array $classList = [
        'container'         => 'c_checkbox',
        'checked'           => 'c_checkbox--selected',
        'disabled'          => 'c_checkbox--disabled',
        'focused'           => 'c_checkbox--focused',
        'indeterminate'     => 'c_checkbox--indeterminate',
        'input'             => 'c_checkbox__native-control',
        'label'             => 'c_checkbox__label',
        'background'        => 'c_checkbox__background',
        'checkmark'         => 'c_checkbox__checkmark',
        'checkmark_path'    => 'c_checkbox__checkmark-path',
        'mixedmark'         => 'c_checkbox__mixed-mark',
        'ripple'            => 'c_ripple c_checkbox__ripple',
    ];

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $label = null,
        bool $checked = false,
        bool $disabled = false,
        ?bool $required = false,
        ?bool $indeterminate = false
    ) {
        $this->id = $id ?? 'checkbox-' . Str::random(8);
        $this->name = $name ?? $this->id;
        $this->label = $label;
        $this->checked = $checked;
        $this->disabled = $disabled;
        $this->required = $required;
        $this->indeterminate = $indeterminate;
    }

    public function classNames() {  
        $classes[] = $this->classList['container'];

        if ($this->checked) {
            $classes[] = $this->classList['checked'];
        }
        if ($this->disabled) {
            $classes[] = $this->classList['disabled'];
        }
        if ($this->indeterminate) {
            $classes[] = $this->classList['indeterminate'];
        }
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.selection.checkbox');
    }
}

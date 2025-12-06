<?php

namespace BMDC\Components\selection;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class BMDCSwitch extends Component {
    public string $id;

    public string $name;

    public ?string $label;
    public bool $checked;
    public bool $disabled;

    public array $classList = [
        'container'         => 'c_switch',
        'checked'           => 'c_switch--checked',
        'disabled'          => 'c_switch--disabled',
        'focused'           => 'c_switch--focused',
        'input'             => 'c_switch__native-control',
        'label'             => 'c_switch__label',
        'track'             => 'c_switch__track',
        'thumb'             => 'c_switch__thumb',
        'thumb_underlay'    => 'c_switch__thumb-underlay',
    ];

    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $label = null,
        bool $checked = false,
        bool $disabled = false
    ) {
        $this->id = $id ?? 'switch-' . Str::random(8);
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
        return view('bmdc::components.selection.switch');
    }
}

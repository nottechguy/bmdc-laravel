<?php

namespace BMDC\Components\textinput;

use Illuminate\View\Component;

class BMDCSelectOption extends Component {

    public string $text;
    public string $value;
    public ?string $leadingIcon;
    public ?bool $disabled;
    public bool $selected;

    public array $classList = [
    ];

    public function __construct(
        string $text = '',
        string $value = '',
        ?string $leadingIcon = null,
        ?bool $disabled = false,
        bool $selected = false,
    ) {
        $this->text = $text;
        $this->value = $value;
        $this->leadingIcon = $leadingIcon;
        $this->disabled = $disabled;
        $this->selected = $selected;
    }

    public function classNames() {
        $classes = '';
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.textinput.select.select-option');
    }
}

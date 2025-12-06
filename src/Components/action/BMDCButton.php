<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;


class BMDCButton extends Component {

    public ?string $variant;
    public ?string $icon;
    public ?string $href;
    public ?string $type;

    public ?bool $shaped;
    public bool $noRipple;

    public array $classList = [
        'container'     => 'c_button',
        'raised'        => 'c_button--raised',
        'outlined'      => 'c_button--outlined',
        'unelevated'    => 'c_button--unelevated',
        'shaped'        => 'c_button--shaped',
        'disabled'      => 'c_button--disabled',
        'label'         => 'c_button__label',
        'icon'          => 'c_button__icon',
        'ripple'        => 'c_button__ripple'
    ];

    public function __construct(
        ?string $variant = 'text',
        ?string $icon = null,
        ?string $href = null,
        ?string $type = 'button',
        ?bool $shaped = false,
        ?bool $noRipple = false
    ) {
        $this->variant = $variant;
        $this->icon = $icon;
        $this->href = $href;
        $this->type = $type;
        $this->shaped = $shaped;
        $this->noRipple = $noRipple;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->variant == 'raised') {
            $classes[] = $this->classList['raised'];
        }

        if ($this->variant == 'outlined') {
            $classes[] = $this->classList['outlined'];
        }

        if ($this->variant == 'unelevated') {
            $classes[] = $this->classList['unelevated'];
        }

        if ($this->shaped) {
            $classes[] = $this->classList['shaped'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.action.button');
    }
}

<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;

class BMDCChipset extends Component {

    public string $type;
    public ?string $variant;
    public ?bool $shaped;

    public array $classList = [
        'container'             => 'c_chip-set',
        'shaped'                => 'c_chip-set--shaped',
        'outlined'              => 'c_chip-set--outlined',
        'input'                 => 'c_chip-set--input',
        'filter'                => 'c_chip-set--filter',
        'choice'                => 'c_chip-set--choice',
        'action'                => 'c_chip-set--action',
        'chips'                 => 'c_chip-set__chips'
    ];


    public function __construct(string $type = 'choice', ?string $variant = '', ?bool $shaped = false) {
        $this->type = $type;
        $this->variant = $variant;
        $this->shaped = $shaped;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        switch ($this->type) {
            case 'input' : $classes[] = $this->classList['input'];  break;
            case 'filter': $classes[] = $this->classList['filter']; break;
            case 'action': $classes[] = $this->classList['action']; break;
            default: $classes[] = $this->classList['choice']; break;
        }
        
        if ($this->variant == 'outlined') {
            $classes[] = $this->classList['outlined'];
        }

        if ($this->shaped) {
            $classes[] = $this->classList['shaped'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.action.chip-set');
    }
}

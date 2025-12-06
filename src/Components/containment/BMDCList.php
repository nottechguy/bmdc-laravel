<?php

namespace BMDC\Components\containment;

use Illuminate\View\Component;

class BMDCList extends Component {

    public ?string $type;
    public ?bool $avatarList;
    public ?bool $dense;
    public ?bool $singleSelection;
    public ?bool $noSelection;
    public bool $nonInteractive;

    public array $classList = [
        'container'         => 'c_list',
        'two_line'          => 'c_list--two-line',
        'three_line'        => 'c_list--three-line',
        'avatar_list'       => 'c_list--avatar-list',
        'single_selection'  => 'c_list--single-selection',
        'no_selection'      => 'c_list--no-selection',
        'non_interactive'   => 'c_list--non-interactive',
        'dense'             => 'c_list--dense'
    ];

    public function __construct(
        ?string $type = '',
        ?bool $avatarList = false,
        ?bool $dense = false,
        ?bool $singleSelection = false,
        ?bool $noSelection = true,
        ?bool $nonInteractive = false
    ) {
        $this->type = $type;
        $this->avatarList = $avatarList;
        $this->dense = $dense;
        $this->singleSelection = $singleSelection;
        $this->noSelection = $noSelection;
        $this->nonInteractive = $nonInteractive;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->type == 'two_line') {
            $classes[] = $this->classList['two_line'];
        } else if ($this->type == 'three_line') {
            $classes[] = $this->classList['three_line'];
        }
        
        if ($this->avatarList) {
            $classes[] = $this->classList['avatar_list'];
        }
        
        if ($this->noSelection) {
            $classes[] = $this->classList['no_selection'];
        }

        if (!$this->noSelection && $this->singleSelection) {
            $classes[] = $this->classList['single_selection'];
        }

        if ($this->nonInteractive) {
            $classes[] = $this->classList['non_interactive'];
        }
        
        if ($this->dense) {
            $classes[] = $this->classList['dense'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.containment.list.list');
    }
}

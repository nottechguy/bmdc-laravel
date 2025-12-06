<?php

namespace BMDC\Components\action;

use Illuminate\View\Component;

class BMDCChip extends Component {

    public string $text;
    public ?string $avatar;
    public ?string $leadingIcon;
    public ?bool $selected;
    public ?bool $expandable;
    public ?bool $canRemove;

    public array $classList = [
        'container'             => 'c_chip',
        'selected'              => 'c_chip--selected',
        'expandable'            => 'c_chip--expandable',
        'avatar'                => 'c_chip__avatar',
        'icon'                  => 'c_chip__icon',
        'icon_leading'          => 'c_chip__icon--leading',
        'icon_leading_hidden'   => 'c_chip__icon--leading-hidden',
        'icon_trailing'         => 'c_chip__icon--trailing',
        'checkmark'             => 'c_chip__checkmark',
        'checkmark_svg'         => 'c_chip__checkmark-svg',
        'checkmark_path'        => 'c_chip__checkmark-path',
        'text'                  => 'c_chip__text'
    ];


    public function __construct(
        string $text = '',
        ?string $avatar = null,
        ?string $leadingIcon = null,
        ?bool $selected = false,
        ?bool $expandable = false,
        ?bool $canRemove = false,
    ) {
        $this->text = $text;
        $this->avatar = $avatar;
        $this->leadingIcon = $leadingIcon;
        $this->selected = $selected;
        $this->expandable = $expandable;
        $this->canRemove = $canRemove;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        
        if ($this->selected) {
            $classes[] = $this->classList['selected'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.action.chip');
    }
}

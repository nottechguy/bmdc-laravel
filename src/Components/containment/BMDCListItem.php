<?php

namespace BMDC\Components\containment;

use Illuminate\View\Component;

class BMDCListItem extends Component {

    public string $itemType;
    public string $text;
    public ?string $secondaryText;
    public ?string $avatar;
    public ?string $image;
    public ?string $thumbnail;
    public ?string $leadingIcon;
    public ?string $trailingIcon;
    public ?string $trailingSupportingText;
    public ?string $href;
    public ?bool $disabled;
    public bool $activated;
    public bool $nonInteractive;

    public array $classList = [
        'container'         => 'c_list-item',
        'activated'         => 'c_list-item--activated',
        'disabled'          => 'c_list-item--disabled',
        'non_interactive'   => 'c_list--non-interactive',
        'text'              => 'c_list-item__text',
        'primary_text'      => 'c_list-item__primary-text',
        'secondary_text'    => 'c_list-item__secondary-text',
        'avatar'            => 'c_list-item__avatar',
        'image'             => 'c_list-item__image',
        'thumbnail'         => 'c_list-item__thumbnail',
        'graphic'           => 'c_list-item__graphic',
        'leading_icon'      => 'c_list-item__graphic',
        'trailing_icon'     => 'c_list-item__graphic',
        'trailing_supporting_text' => 'c_list-item__trailing-suportting-text',
        'meta'              => 'c_list-item__meta',
        'meta_align_start'  => 'c_list-item__meta--align-start',
        'with_collapsed_list' => 'c_list-item--with-collapsed-list',
        'inner_list'        => 'c_list-item__inner-list',
        'inner_list_collapsed' => 'c_list-item__inner-list--collapsed'
    ];

    public function __construct(
        string $itemType = 'text',
        string $text = '',
        ?string $secondaryText = null,
        ?string $avatar = null,
        ?string $image = null,
        ?string $thumbnail = null,
        ?string $leadingIcon = null,
        ?string $trailingIcon = null,
        ?string $trailingSupportingText = null,
        ?string $href = null,
        ?bool $disabled = false,
        bool $activated = false,
        ?bool $nonInteractive = true,
    ) {
        $this->itemType = $itemType;
        $this->text = $text;
        $this->secondaryText = $secondaryText;
        $this->avatar = $avatar;
        $this->image = $image;
        $this->thumbnail = $thumbnail;
        $this->leadingIcon = $leadingIcon;
        $this->trailingIcon = $trailingIcon;
        $this->trailingSupportingText = $trailingSupportingText;
        $this->href = $href;
        $this->disabled = $disabled;
        $this->activated = $activated;
        $this->nonInteractive = $nonInteractive;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->nonInteractive) {
            $classes[] = $this->classList['non_interactive'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.containment.list.list-item');
    }
}

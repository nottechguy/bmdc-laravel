<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCDrawerItem extends Component {

    public string $text;
    public ?string $href;
    public ?string $icon;
    public ?bool $disabled;
    public bool $activated;
    public ?int $badge;

    public array $classList = [
        'container'     => 'c_list-item',
        'activated'     => 'c_list-item--activated',
        'disabled'      => 'c_list-item--disabled',
        'text'          => 'c_list-item__text',
        'icon'          => 'c_list-item__graphic',
        'supporting_text' => 'c_list-item__trailing-suportting-text'
    ];

    public function __construct(
        string $text = '',
        ?string $href = null,
        ?string $icon = null,
        ?bool $disabled = false,
        bool $activated = false,
        ?int $badge = null
    ) {
        $this->text = $text;
        $this->href = $href;
        $this->icon = $icon;
        $this->disabled = $disabled;
        $this->activated = $activated;
        $this->badge = $badge;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.drawer.drawer-item');
    }
}

<?php

namespace BMDC\Components\containment;

use Illuminate\View\Component;

class BMDCImageListItem extends Component {

    public string $src;
    public ?string $label;
    public ?string $href;

    public array $classList = [
        'container'         => 'c_image-list__item',
        'image_container'   => 'c_image-list__image-aspect-container',
        'image'             => 'c_image-list__image',
        'supporting'        => 'c_image-list__supporting',
        'label'             => 'c_image-list__label',
    ];

    public function __construct(
        string $src = '',
        ?string $label = '',
        ?string $href = null
    ) {
        $this->src = $src;
        $this->label = $label;
        $this->href = $href;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.containment.image-list.image-list-item');
    }
}

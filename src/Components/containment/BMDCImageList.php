<?php

namespace BMDC\Components\containment;

use Illuminate\View\Component;

class BMDCImageList extends Component {

    public ?string $type;
    public ?bool $textProtection;

    public array $classList = [
        'container' => 'c_image-list',
        'masonry'   => 'c_image-list--masonry',
        'with_text' => 'c_image-list--with-text-protection'
    ];

    public function __construct(
        ?string $type = 'standard',
        ?bool $textProtection = false
    ) {
        $this->type = $type;
        $this->textProtection = $textProtection;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->type == 'masonry') {
            $classes[] = $this->classList['masonry'];
            $classes[] = 'masonry-image-list';
        } else {
            $classes[] = 'standard-image-list';
        }
        
        if ($this->textProtection) {
            $classes[] = $this->classList['with_text'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.containment.image-list.image-list');
    }
}

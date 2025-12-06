<?php

namespace BMDC\Components\communication;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class BMDCBadge extends Component {


    public ?string $id;
    public int $count;

    public array $classList = [
        'badge'         => 'c_badge',
        'large'         => 'c_badge--large',
        'single_digit'  => 'c_badge--single-digit',
        'small'         => 'c_badge--small'
          
    ];

    public function __construct(
        ?string $id = null,
        int $count = 0,
    ) {
        $this->id = $id ?? 'badge-' . Str::random(8);
        $this->count = $count;
    }

    public function classNames() {
        $classes = [$this->classList['badge']];

        if ($this->count == 1) {
            $classes[] = $this->classList['small'];
        } else if ($this->count > 1 && $this->count < 9) {
            $classes[] = $this->classList['single_digit'];
        } else if ($this->count > 9) {
            $classes[] = $this->classList['large'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.communication.badge');
    }

}

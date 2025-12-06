<?php

namespace BMDC\Components\communication;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class BMDCSnackbar extends Component {


    public ?string $id;
    public string $label;
    public string $action;
    public ?bool $leading;
    public ?bool $stacked;

    public array $classList = [
        'container'         => 'c_snackbar',
        'opening'           => 'c_snackbar--opening',
        'open'              => 'c_snackbar--open',
        'closing'           => 'c_snackbar--closing',
        'leading'           => 'c_snackbar--leading',
        'stacked'           => 'c_snackbar--stacked',
        'surface'           => 'c_snackbar__surface',
        'label'             => 'c_snackbar__label',
        'actions'           => 'c_snackbar__actions',
        'action'            => 'c_snackbar__action',
        'dismiss'           => 'c_snackbar__dismiss'
    ];

    public function __construct(
        ?string $id = null,
        string $label = '',
        ?string $action = '',
        ?bool $leading = false,
        ?bool $stacked = false
    ) {
        $this->id = $id ?? 'snackbar-' . Str::random(8);
        $this->label = $label;
        $this->action = $action;
        $this->leading = $leading;
        $this->stacked = $stacked;
    }

    public function classNames() {
        $classes = [$this->classList['container']];

        if ($this->leading) {
            $classes[] = $this->classList['leading'];
        }

        if ($this->stacked) {
            $classes[] = $this->classList['stacked'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.communication.snackbar');
    }

}

<?php

namespace BMDC\Components\communication;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class BMDCDialog extends Component {

    public ?string $id;
    public ?string $title;
    public string $type;
    public ?bool $isAcknowledgement;

    public ?string $negativeButton;
    public ?string $positiveButton;

    public array $classList = [
        'dialog'            => 'c_dialog',
        'container'         => 'c_dialog__container',
        'alert'             => 'c_dialog--alert',
        'simple'            => 'c_dialog--simple',
        'confirmation'      => 'c_dialog--confirmation',
        'fullscreen'        => 'c_dialog--fullscreen',
        'scrollable'        => 'c_dialog--scrollable',
        'open'              => 'c_dialog--open',
        'opening'           => 'c_dialog--opening',
        'closing'           => 'c_dialog--closing',
        'stacked'           => 'c_dialog--stacked',
        'scrim'             => 'c_dialog__scrim',
        'scrim_removed'     => 'c_dialog__scrim--removed',
        'surface'           => 'c_dialog__surface',
        'header'            => 'c_dialog__header',
        'title'             => 'c_dialog__title',
        'content'           => 'c_dialog__content',
        'actions'           => 'c_dialog__actions',
        'button'            => 'c_dialog__button',
        'positive_button'   => 'c_dialog__button--positive',
        'negative_button'   => 'c_dialog__button--negative'
    ];
    
    

    public function __construct(
        ?string $id = null,
        ?string $title = null,
        string $type = "alert",
        ?bool $isAcknowledgement = false,
        ?string $negativeButton = null,
        ?string $positiveButton = "OK"
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
        $this->isAcknowledgement = $isAcknowledgement;
        $this->negativeButton = $negativeButton;
        $this->positiveButton = $positiveButton;
    }

    public function classNames() {
        $classes = [$this->classList['dialog']];

        if ($this->type == "fullscreen") {
            $classes[] = $this->classList['fullscreen'];
        }
        
        if ($this->type == "confirmation") {
            $classes[] = $this->classList['confirmation'];
        }

        if ($this->type == "confirmation" || $this->type == "scrollable") {
            $classes[] = $this->classList['scrollable'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.communication.dialog');
    }

}

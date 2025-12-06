<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCDrawer extends Component {
    public ?string $title;
    public ?string $subtitle;

    public ?string $type;

    public array $classList = [
        'container'     => 'c_navigation-drawer',
        'permanent'     => 'c_navigation-drawer--permanent',
        'dismissible'   => 'c_navigation-drawer--dismissible',
        'modal'         => 'c_navigation-drawer--modal',
        'header'        => 'c_navigation-drawer__header',
        'title'         => 'c_navigation-drawer__title',
        'subtitle'      => 'c_navigation-drawer__subtitle',
        'content'       => 'c_navigation-drawer__content',
        'scrim'         => 'c_navigation-drawer-scrim',
        'list'          => 'c_list'
    ];

    public function __construct(
        ?string $type = 'permanent',
        ?string $title = '',
        ?string $subtitle = ''
    ) {
        $this->type = $type;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        
        if ($this->type == "permanent") {
            $classes[] = $this->classList['permanent'];
        }
        
        if ($this->type == "") {
            $classes[] = $this->classList['dismissible'];
        }
        
        if ($this->type == "modal") {
            $classes[] = $this->classList['modal'];
        }

        return implode(' ', $classes);
    }

    public function render() {
        return view('bmdc::components.navigation.drawer.drawer');
    }
}

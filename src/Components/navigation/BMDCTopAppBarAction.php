<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCTopAppBarAction extends Component
{
    public ?string $icon;
    public ?string $label;
    public ?string $href;
    public bool $overflow;
    
    public array $classList = [
        'action_item'   => 'c_top-app-bar__action-item',
        'icon_button'   => 'c_icon-button',
        'overflow'      => 'c_top-app-bar__action-item--overflow'
    ];
    
    public function __construct(
        ?string $icon = null,
        ?string $label = null,
        ?string $href = null,
        bool $overflow = false
    ) {
        $this->icon = $icon;
        $this->label = $label;
        $this->href = $href;
        $this->overflow = $overflow;
    }
    
    public function classNames(): string
    {
        $classes = [
            $this->classList['action_item'],
            $this->classList['icon_button']
        ];
        
        if ($this->overflow) {
            $classes[] = $this->classList['overflow'];
        }
        
        return implode(' ', $classes);
    }
    
    public function render()
    {
        return view('bmdc::components.navigation.top-app-bar.action');
    }
}
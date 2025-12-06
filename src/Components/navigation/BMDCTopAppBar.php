<?php

namespace BMDC\Components\navigation;

use Illuminate\View\Component;

class BMDCTopAppBar extends Component
{
    public string $variant;
    public ?string $title;
    public ?string $subtitle;
    public ?string $logo;
    public ?string $logoAlt;
    public bool $centerTitle;
    public bool $fixed;
    public bool $prominent;
    public bool $dense;
    public bool $searchMode;
    public bool $searchCollapsible;
    public ?string $navigationIcon;
    public ?string $searchPlaceholder;
    public string $searchWidth;
    public array $scrollBehavior;
    
    public array $classList = [
        'container'                 => 'c_top-app-bar',
        'fixed'                     => 'c_top-app-bar--fixed',
        'prominent'                 => 'c_top-app-bar--prominent',
        'dense'                     => 'c_top-app-bar--dense',
        'short'                     => 'c_top-app-bar--short',
        'short_collapsed'           => 'c_top-app-bar--short-collapsed',
        'center_aligned'            => 'c_top-app-bar--center-aligned',
        'search'                    => 'c_top-app-bar--search',
        'search_active'             => 'c_top-app-bar--search-active',
        'search_collapsed'          => 'c_top-app-bar--search-collapsed',
        'search_expanded'           => 'c_top-app-bar--search-expanded',
        'search_full_width'         => 'c_top-app-bar--search-full-width',
        'row'                       => 'c_top-app-bar__row',
        'section'                   => 'c_top-app-bar__section',
        'section_align_start'       => 'c_top-app-bar__section--align-start',
        'section_align_end'         => 'c_top-app-bar__section--align-end',
        'navigation_icon'           => 'c_top-app-bar__navigation-icon',
        'title'                     => 'c_top-app-bar__title',
        'title_container'           => 'c_top-app-bar__title-container',
        'headline'                  => 'c_top-app-bar__headline',
        'subtitle'                  => 'c_top-app-bar__subtitle',
        'logo'                      => 'c_top-app-bar__logo',
        'action_item'               => 'c_top-app-bar__action-item',
        'search_container'          => 'c_top-app-bar__search-container',
        'search_trigger'            => 'c_top-app-bar__search-trigger',
        'search_input'              => 'c_top-app-bar__search-input',
        'search_icon'               => 'c_top-app-bar__search-icon',
        'search_clear'              => 'c_top-app-bar__search-clear',
        'fixed_adjust'              => 'c_top-app-bar--fixed-adjust',
        'prominent_fixed_adjust'    => 'c_top-app-bar--prominent-fixed-adjust',
        'dense_fixed_adjust'        => 'c_top-app-bar--dense-fixed-adjust',
        'short_fixed_adjust'        => 'c_top-app-bar--short-fixed-adjust',
        'scrolled'                  => 'c_top-app-bar--scrolled'
    ];
    
    public array $variants = [
        'standard', 'center-aligned', 'medium', 'large', 'small', 'search'
    ];
    
    public array $scrollBehaviors = [
        'none', 'fixed', 'short', 'prominent'
    ];
    
    public function __construct(
        string $variant = 'standard',
        ?string $title = null,
        ?string $subtitle = null,
        ?string $logo = null,
        ?string $logoAlt = null,
        bool $centerTitle = false,
        bool $fixed = false,
        bool $prominent = false,
        bool $dense = false,
        bool $searchMode = false,
        bool $searchCollapsible = true,
        ?string $navigationIcon = 'menu',
        ?string $searchPlaceholder = 'Search...',
        string $searchWidth = 'adaptive',
        array $scrollBehavior = []
    ) {
        $this->variant = in_array($variant, $this->variants) ? $variant : 'standard';
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->logo = $logo;
        $this->logoAlt = $logoAlt ?? $title ?? 'Logo';
        $this->centerTitle = $centerTitle || $variant === 'center-aligned';
        $this->fixed = $fixed;
        $this->prominent = $prominent;
        $this->dense = $dense;
        $this->searchMode = $searchMode || $variant === 'search';
        $this->searchCollapsible = $searchCollapsible;
        $this->navigationIcon = $navigationIcon;
        $this->searchPlaceholder = $searchPlaceholder;
        $this->searchWidth = $searchWidth;
        $this->scrollBehavior = $scrollBehavior;
    }
    
    public function classNames(): string
    {
        $classes = [$this->classList['container']];
        
        if ($this->fixed) {
            $classes[] = $this->classList['fixed'];
        }
        
        if ($this->prominent) {
            $classes[] = $this->classList['prominent'];
        }
        
        if ($this->dense) {
            $classes[] = $this->classList['dense'];
        }
        
        if ($this->variant === 'center-aligned' || $this->centerTitle) {
            $classes[] = $this->classList['center_aligned'];
        }
        
        if ($this->variant === 'search' || $this->searchMode) {
            $classes[] = $this->classList['search'];
            
            if ($this->searchCollapsible) {
                $classes[] = $this->classList['search_collapsed'];
            }
            
            if ($this->searchWidth === 'full') {
                $classes[] = $this->classList['search_full_width'];
            }
        }
        
        if (isset($this->scrollBehavior['type']) && $this->scrollBehavior['type'] === 'short') {
            $classes[] = $this->classList['short'];
        }
        
        return implode(' ', $classes);
    }
    
    public function getScrollBehaviorData(): string
    {
        if (empty($this->scrollBehavior)) {
            return '';
        }
        
        return json_encode($this->scrollBehavior);
    }
    
    public function isSearchMode(): bool
    {
        return $this->searchMode || $this->variant === 'search';
    }
    
    public function hasLogo(): bool
    {
        return !empty($this->logo);
    }
    
    public function hasSubtitle(): bool
    {
        return !empty($this->subtitle);
    }
    
    public function getSearchWidth(): string
    {
        return $this->searchWidth;
    }
    
    public function render()
    {
        return view('bmdc::components.navigation.top-app-bar.top-app-bar');
    }
}
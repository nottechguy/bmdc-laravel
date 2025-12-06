<?php

namespace BMDC\Components\containment;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\View;

class BMDCCard extends Component
{
    // Configuration Properties
    public ?string $id;
    public ?string $type;
    public ?string $variant;
    public ?string $orientation;

    // Content Properties
    public ?string $title;
    public ?string $subtitle;
    public ?string $mediaSrc;
    public ?string $thumbnailSrc;

    // View Logic Flags (set in render())
    public bool $hasHeader = false;
    public bool $hasPrimary = false;
    public bool $hasSupportingText = false;
    public bool $hasActions = false;
    public bool $hasButtons = false;
    public bool $hasIcons = false;

    public array $classList = [
        'container'        => 'c_card',
        'outlined'         => 'c_card--outlined',
        'horizontal'       => 'c_card-orientation--horizontal',
        'media_overlay'    => 'c_card--with-text-over-media', // Renamed for clarity
        'with_header'      => 'c_card--with-header',
        'with_thumbnail'   => 'c_card--with-thumbnail',
        'primary_action'   => 'c_card__primary-action',
        'primary'          => 'c_card__primary',
        'thumbnail'        => 'c_card__thumbnail',
        'header_text'      => 'c_card__header-text',
        'secondary'        => 'c_card__secondary',
        'media'            => 'c_card__media',
        'media_content'    => 'c_card__media-content',
        'media_square'     => 'c_card__media--square',
        'media_16_9'       => 'c_card__media--16-9',
        'media_actions'    => 'c_card__media-actions',
        'content'          => 'c_card__content',
        'title'            => 'c_card__title',
        'subtitle'         => 'c_card__subtitle',
        'actions'          => 'c_card__actions',
        'action_buttons'   => 'c_card__action-buttons',
        'action_icons'     => 'c_card__action-icons',
        'action'           => 'c_card__action',
        'button'           => 'c_card__action--button',
        'icon'             => 'c_card__action--icon',
        'divider'          => 'c_card__divider',
        'aditional_actions'=> 'c_card__aditional-actions'
    ];

    public function __construct(
        ?string $type = 'standard',
        string $id = null,
        ?string $variant = '',
        ?string $title = null,
        ?string $subtitle = null,
        ?string $mediaSrc = null,
        ?string $thumbnailSrc = null,
        ?string $orientation = 'vertical'
    ) {
        $this->id = $id ?? 'card-' . Str::random(8);
        $this->type = $type;
        $this->variant = $variant;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->mediaSrc = $mediaSrc;
        $this->thumbnailSrc = $thumbnailSrc;
        $this->orientation = $orientation;
    }

    public function classNames(): string
    {
        $classes = [$this->classList['container']];
        
        if ($this->variant === 'outlined') {
            $classes[] = $this->classList['outlined'];
        }
        
        if ($this->orientation == 'horizontal') {
            $classes[] = $this->classList['horizontal'];
        }
        
        if ($this->thumbnailSrc !== null) {
            $classes[] = $this->classList['with_thumbnail'];
        }

        if ($this->type === 'text_over_media') {
            $classes[] = $this->classList['media_overlay'];
        } else if ($this->type === 'with_header') {
            $classes[] = $this->classList['with_header'];
        }        

        return implode(' ', $classes);
    }

    public function render() {
        // Once the properties are set, return the view to be rendered.
        return view('bmdc::components.containment.card.card');
    }
}

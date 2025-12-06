<?php

namespace BMDC\Components\textinput;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class BMDCSelect extends Component {

    public string $id;
    public string $label;
    public ?string $value;
    public ?string $name;
    public ?string $leadingIcon;
    public ?string $supportingText;
    public ?bool $persistentSupportingText;
    public bool $withError;
    public bool $disabled;
    public string $variant;
    public ?bool $required;
    public ?bool $dense;
    public ?bool $readonly;
    public array $classList = [
        'container'         => 'c_select',
        'anchor'            => 'c_select__anchor',
        'outlined'          => 'c_select--outlined',
        'filled'            => 'c_select--filled',
        'focused'           => 'c_select--focused',
        'disabled'          => 'c_select--disabled',
        'error'             => 'c_select--invalid',
        'activated'         => 'c_select--activated',
        'with_leading_icon' => 'c_select--with-leading-icon',
        'icon'              => 'c_select__icon',
        'leading_icon'      => 'c_select__icon--leading',
        'no_label'          => 'c_select--no-label',
        'dense'             => 'c_select--dense',
        'readonly'          => 'c_select--readonly',
        'dropdown_icon'     => 'c_select__dropdown-icon',
        'selected_text'     => 'c_select__selected-text',
        'input'             => 'c_select__input',
        'label'             => 'c_select-floating-label',
        'label_floating'    => 'c_select-floating-label--floating',
        'label_floating_above' => 'c_select-floating-label--float-above',
        'label_required'    => 'c_select-floating-label--required',
        'notched_outline'   => 'c_select-notched-outline',
        'notched_outline_notched' => 'c_select-notched-outline--notched',
        'notched_leading'    => 'c_select-notched-outline__leading',
        'notched_trailing'   => 'c_select-notched-outline__trailing',
        'notched_notch'      => 'c_select-notched-outline__notch',
        'line_ripple'                   => 'c_select__line-ripple',
        'line_ripple_active'            => 'c_select__line-ripple--active',
        'line_ripple_deactivating'      => 'c_select__line-ripple-deactivating',
        'helper_line'                   => 'c_select-helper-line',
        'helper_text'                   => 'c_select-helper-text',
        'helper_text_persistent'        => 'c_select-helper-text--persistent',
    ];

    public function __construct(
        ?string $id = null,
        string $label = '',
        ?string $value = '',
        ?string $name = null,
        ?string $leadingIcon = null,
        ?string $supportingText = null,
        ?bool $persistentSupportingText = null,
        bool $withError = false,
        bool $disabled = false,
        string $variant = 'filled',
        ?bool $required = false,
        ?bool $dense = false,
        ?bool $readonly = false,
    ) {
        $this->id = $id ?? 'select-' . Str::random(8);
        $this->label = $label;
        $this->value = $value;
        $this->name = $name;
        $this->leadingIcon = $leadingIcon;
        $this->supportingText = $supportingText;
        $this->persistentSupportingText = $persistentSupportingText;
        $this->withError = $withError;
        $this->disabled = $disabled;
        $this->variant = $variant;
        $this->required = $required;
        $this->dense = $dense;
        $this->readonly = $readonly;
    }

    public function classNames() {
        $classes = [$this->classList['container']];
        
        switch ($this->variant) {
            case 'filled': $classes[] = $this->classList['filled']; break;
            case 'outlined': $classes[] = $this->classList['outlined']; break;
            default: $classes[] = $this->classList['filled'];
        }

        if ($this->leadingIcon) {
            $classes[] = $this->classList['with_leading_icon'];
        }

        if ($this->disabled) {
            $classes[] = $this->classList['disabled'];
        }

        if ($this->withError) {
            $classes[] = $this->classList['error'];
        }

        if ($this->isActivated($this->attributes)) {
            $classes[] = $this->classList['label_floating'];
        }
        
        if ($this->dense) {
            $classes[] = $this->classList['dense'];
        }

        if ($this->readonly) {
            $classes[] = $this->classList['readonly'];
        }

        return implode(' ', $classes);
    }

    public function isActivated($attributes): bool {
        // Check explicit value, old input, or if autofocus is likely to make it non-empty
        return $this->value !== "" ||
               old($this->name ?? $this->id) !== null ||
               $attributes->has('autofocus');
    }

    public function render() {
        return view('bmdc::components.textinput.select.select');
    }

}

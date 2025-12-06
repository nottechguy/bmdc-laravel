<?php

namespace BMDC\Components\textinput;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;

class BMDCTextfield extends Component {

    public string $id;
    public string $label;
    public string $type;
    public ?bool $endAligned;
    public ?string $value;
    public ?string $name;
    public ?string $leadingIcon;
    public ?string $trailingIcon;
    public ?string $prefix;
    public ?bool $persistentPrefix;
    public ?string $suffix;
    public ?bool $persistentSuffix;
    public ?string $supportingText;
    public ?bool $persistentSupportingText;
    public bool $withError;
    public bool $disabled;
    public string $variant;
    public ?bool $required;
    public ?int $maxlength;
    public ?string $pattern;
    public ?bool $dense;
    public ?bool $readonly;
    public array $classList = [
        'container'         => 'c_textfield',
        'outlined'          => 'c_textfield--outlined',
        'filled'            => 'c_textfield--filled',
        'focused'           => 'c_textfield--focused',
        'end_aligned'       => 'c_textfield--end-aligned',
        'disabled'          => 'c_textfield--disabled',
        'textarea'          => 'c_textfield--textarea',
        'error'             => 'c_textfield--invalid',
        'activated'         => 'c_textfield--activated',
        'no_label'          => 'c_textfield--no-label',
        'with_action_button'=> 'c_textfield--with-action-button',
        'with_leading_icon' => 'c_textfield--with-leading-icon',
        'with_trailing_icon'=> 'c_textfield--with-trailing-icon',
        'dense'             => 'c_textfield--dense',
        'readonly'          => 'c_textfield--readonly',
        'label'             => 'c_textfield-floating-label',
        'label_floating'    => 'c_textfield-floating-label--floating',
        'label_floating_above' => 'c_textfield-floating-label--float-above',
        'label_required'    => 'c_textfield-floating-label--required',
        'icon'              => 'c_textfield__icon',
        'icon_disabled'     => 'c_textfield__icon--disabled',
        'leading_icon'      => 'c_textfield__icon--leading',
        'trailing_icon'     => 'c_textfield__icon--trailing',
        'affix'             => 'c_textfield__affix',
        'affix_persistent'  => 'c_textfield__affix--persistent',
        'prefix'            => 'c_textfield__affix--prefix',
        'prefix_persistent' => 'c_textfield__affix--prefix-persistent',
        'suffix'            => 'c_textfield__affix--suffix',
        'suffix_persistent' => 'c_textfield__affix--suffix-persistent',
        'notched_outline'   => 'c_textfield-notched-outline',
        'notched_outline_notched' => 'c_textfield-notched-outline--notched',
        'notched_leading'    => 'c_textfield-notched-outline__leading',
        'notched_trailing'   => 'c_textfield-notched-outline__trailing',
        'notched_notch'      => 'c_textfield-notched-outline__notch',
        'character_counter'             => 'c_textfield__character-counter',
        'character_counter_active'      => 'c_textfield__character-counter--active',
        'character_counter_inactive'    => 'c_textfield__character-counter--inactive',
        'character_counter_error'       => 'c_textfield__character-counter--error',
        'input'                         => 'c_textfield__input',
        'input_file_container'          => 'c_textfield__input-file-container',
        'input_file_label'              => 'c_textfield__input-file-label',
        'input_file_size'               => 'c_textfield__input-file-size',
        'line_ripple'                   => 'c_textfield__line-ripple',
        'helper_line'                   => 'c_textfield-helper-line',
        'helper_text'                   => 'c_textfield-helper-text',
        'helper_text_persistent'        => 'c_textfield-helper-text--persistent',
    ];

    public function __construct(
        ?string $id = null,
        string $label = '',
        string $type = 'text',
        ?bool $endAligned = false,
        ?string $value = '',
        ?string $name = null,
        ?string $leadingIcon = null,
        ?string $trailingIcon = null,
        ?string $supportingText = null,
        ?bool $persistentSupportingText = null,
        ?string $prefix = null,
        ?bool $persistentPrefix = false,
        ?string $suffix = null,
        ?bool $persistentSuffix = false,
        bool $withError = false,
        bool $disabled = false,
        string $variant = 'filled',
        ?bool $required = false,
        ?int $maxlength = null,
        ?string $pattern = null,
        ?bool $dense = false,
        ?bool $readonly = false,
    ) {
        $this->id = $id ?? 'textfield-' . Str::random(8);
        $this->label = $label;
        $this->type = $type;
        $this->endAligned = $endAligned;
        $this->value = $value;
        $this->name = $name;
        $this->leadingIcon = $leadingIcon;
        $this->trailingIcon = $trailingIcon;
        $this->prefix = $prefix;
        $this->persistentPrefix = $persistentPrefix;
        $this->suffix = $suffix;
        $this->persistentSuffix = $persistentSuffix;
        $this->supportingText = $supportingText;
        $this->persistentSupportingText = $persistentSupportingText;
        $this->withError = $withError;
        $this->disabled = $disabled;
        $this->variant = $variant;
        $this->required = $required;
        $this->maxlength = $maxlength;
        $this->pattern = $pattern;
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

        if ($this->type === 'textarea') {
            $classes[] = $this->classList['textarea'];
        }

        if ($this->label === '') {
            $classes[] = $this->classList['no_label'];
        }

        if ($this->disabled) {
            $classes[] = $this->classList['disabled'];
        }

        if ($this->withError) {
            $classes[] = $this->classList['error'];
        }

        if ($this->leadingIcon !== null) {
            $classes[] = $this->classList['with_leading_icon'];
        }


        if ($this->trailingIcon !== null) {
            $classes[] = $this->classList['with_trailing_icon'];
        }

        if ($this->isActivated($this->attributes)) {
            $classes[] = $this->classList['label_floating'];
        }
        
        if ($this->dense) {
            $classes[] = $this->classList['dense'];
        }
        
        if ($this->endAligned) {
            $classes[] = $this->classList['end_aligned'];
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
               $attributes->has('autofocus') || $this->hasInputPickerTypes();
    }
    
    public function hasInputPickerTypes(): bool {
        return in_array($this->type, ["color"]);
    }

    public function render() {
        return view('bmdc::components.textinput.textfield');
    }

}

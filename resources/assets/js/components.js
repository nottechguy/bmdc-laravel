
defineModule("components:classlist", [], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';
    var classList = {
        'ripple': {
            'ripple': 'c_ripple',
            'fill': 'c_ripple--fill',
            'child': 'c_ripple__ripple',
            'child_done': 'c_ripple__ripple--done',
            'child_held': 'c_ripple__ripple--held',
            'upgraded' : 'c_ripple-upgraded'
        },
        'icon_button': {
            'container':  'c_icon-button',
            'on':  'c_icon-button--on',
            'icon':  'c_icon-button__icon',
            'icon_on':  'c_icon-button__icon--on',
            'ripple':  'c_icon-button__ripple'
        },
        'button': {
            'button': 'c_button',
            'raised': 'c_button--raised',
            'outlined': 'c_button--outlined',
            'tonal': 'c_button--tonal',
        },
        'checkbox' : {
            'container': 'c_checkbox',
            'disabled': 'c_checkbox--disabled',
            'input': 'c_checkbox__native-control',
            'background': 'c_checkbox__background',
            'checkmark': 'c_checkbox__checkmark',
            'checkmark_path': 'c_checkbox__checkmark-path',
            'mixedmark': 'c_checkbox__mixed-mark'
        },
        'dialog': {
            'dialog':  'c_dialog',
            'container': 'c_dialog__container',
            'fullscreen': 'c_dialog--fullscreen',
            'open': 'c_dialog--open',
            'opening': 'c_dialog--opening',
            'closing': 'c_dialog--closing',
            'scrollable': 'c_dialog--scrollable',
            'stacked': 'c_dialog--stacked',
            'scrim': 'c_dialog__scrim',
            'scrim_removed': 'c_dialog__scrim--removed',
            'container': 'c_dialog__container',
            'surface': 'c_dialog__surface',
            'header': 'c_dialog__header',
            'title': 'c_dialog__title',
            'content': 'c_dialog__content',
            'actions': 'c_dialog__actions',
            'button': 'c_dialog__button',
            'positive_button': 'c_dialog__button--positive',
            'negative_button': 'c_dialog__button--negative'
        },
        'list': {
            'container': 'c_list',
            'item': 'c_list-item',
            'item_activated': 'c_list-item--activated'
        },
        'navigation_drawer': {
            'container':  'c_navigation-drawer',
            'permanent':  'c_navigation-drawer--permanent',
            'dismissible':  'c_navigation-drawer--dismissible',
            'modal':  'c_navigation-drawer--modal',
            'header':  'c_navigation-drawer__header',
            'title':  'c_navigation-drawer__title',
            'subtitle':  'c_navigation-drawer__subtitle',
            'content':  'c_navigation-drawer__content',
            'item': 'c_list-item',
        },
        'radio' : {
            'container': 'c_radio',
            'disabled': 'c_radio--disabled',
            'input': 'c_radio__native-control',
            'background': 'c_radio__background',
            'inner_circle': 'c_radio__inner-circle',
            'outer_circle': 'c_radio__outer-circle',
        },
        'snackbar': {
            'container'         : 'c_snackbar',
            'opening'           : 'c_snackbar--opening',
            'open'              : 'c_snackbar--open',
            'closing'           : 'c_snackbar--closing',
            'leading'           : 'c_snackbar--leading',
            'stacked'           : 'c_snackbar--stacked',
            'surface'           : 'c_snackbar__surface',
            'label'             : 'c_snackbar__label',
            'actions'           : 'c_snackbar__actions',
            'action'            : 'c_snackbar__action',
            'dismiss'           : 'c_snackbar__dismiss'
        },
        'switch': {
            'container': 'c_switch',
            'focused': 'c_switch--focused',
            'checked': 'c_switch--checked',
            'disabled': 'c_switch--disabled',
            'input': 'c_switch__native-control',
            'track': 'c_switch__track',
            'thumb': 'c_switch__thumb',
            'thumb_underlay': 'c_switch__thumb-underlay',
            'ripple': 'c_switch__ripple',
        },
        'segmented_button': {
            "parent": "c_segmented-buttons-container",
            "parent_single_select": "c_segmented-buttons-container--single-select",
            "parent_multiple_select": "c_segmented-buttons-container--multi-select",
            'button': 'c_segmented-button',
            'selected': 'c_segmented-button--selected',
            'with_icon': 'c_segmented-button--with-icon',
            'icon': 'c_segmented-button__icon',
            'icon_active': 'c_segmented-button__icon--active',
            'check_mark': 'c_segmented-button__check-mark',
            'check_mark_active': 'c_segmented-button__check-mark--active'
        },
        'tab' : {
            'tabbar'                : 'c_tab-bar',
            'scroller'              : 'c_tab-scroller',
            'scroller_area'         : 'c_tab-scroller__scroll-area',
            'scroller_content'      : 'c_tab-scroller__scroll-content',
            'container'             : 'c_tab',
            'active'                : 'c_tab--active',
            'focused'               : 'c_tab--focused',
            'content'               : 'c_tab__content',
            'label'                 : 'c_tab__text-label',
            'icon'                  : 'c_tab__icon',
            'badge'                 : 'c_tab__badge',
            'indicator'             : 'c_tab-indicator',
            'indicator_active'      : 'c_tab-indicator--active',
            'indicator_content'     : 'c_tab-indicator__content',
            'indicator_underline'   : 'c_tab-indicator__content--underline',
            'no_transition'         : 'c_tab-indicator--no-transition'
        },
        'textfield': {
            'container'         : 'c_textfield',
            'outlined'          : 'c_textfield--outlined',
            'filled'            : 'c_textfield--filled',
            'focused'           : 'c_textfield--focused',
            'disabled'          : 'c_textfield--disabled',
            'error'             : 'c_textfield--invalid',
            'activated'         : 'c_textfield--activated',
            'label_floating'    : 'c_textfield--label-floating',
            'no_label'          : 'c_textfield--no-label',
            'label'             : 'c_textfield-floating-label',
            'label_float_above' : 'c_textfield-floating-label--float-above',
            'label_required'    : 'c_textfield-floating-label--required',
            'label_shake'       : 'c_textfield-floating-label--shake',
            'icon'              : 'c_textfield__icon',
            'icon_disabled'     : 'c_textfield__icon--disabled',
            'icon_leading'      : 'c_textfield__icon--leading',
            'icon_trailing'     : 'c_textfield__icon--trailing',
            'with_leading_icon' : 'c_textfield--with-leading-icon',
            'with_trailing_icon': 'c_textfield--with-trailing-icon',
            'supporting_text'   : 'c_textfield__supporting-text',
            'notched_outline'   : 'c_textfield-notched-outline',
            'notched_outline_notched' : 'c_textfield-notched-outline--notched',
            'notched_leading'    : 'c_textfield-notched-outline__leading',
            'notched_trailing'   : 'c_textfield-notched-outline__trailing',
            'notched_notch'      : 'c_textfield-notched-outline__notch',
            'helper_line'        : 'c_textfield-helper-line',
            'helper_text'        : 'c_textfield-helper-text',
            'helper_text_validation_msg'    : 'c_textfield-helper-text--validation-msg',
            'helper_text_persistent'        : 'c_textfield-helper-text--persistent',
            'character_counter'             : 'c_textfield-character-counter',
            'character_counter_active'      : 'c_textfield-character-counter--active',
            'character_counter_inactive'    : 'c_textfield-character-counter--inactive',
            'character_counter_error'       : 'c_textfield-character-counter--error',
            'input'                         : 'c_textfield__input',
            'input_file_label'              : 'c_textfield__input-file-label',
            'input_file_size'               : 'c_textfield__input-file-size',
            'line_ripple'                   : 'c_textfield__line-ripple',
            'line_ripple_active'            : 'c_textfield__line-ripple--active',
        }
    };

    exports['default'] = classList;
}), 66);

defineModule("components:state", [], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';
    exports.FOCUSED_TAB = null;
    exports.LAST_FOCUSED_ELEMENT = null;
    exports.ACTIVE_DIALOG = null;
}), 66);

defineModule("components:events", [], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {

    function signal(target, eventType, handler, passive) {
        eventType = eventType.toLowerCase();
        requireModule("Event").addEventListener(target, eventType, handler, passive);
    }

    var events = {
        signal: signal
    };

    exports['default'] = events;
}), 66);

defineModule("components:utils", [], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {

    function formatFileSize(bytes) {
        var decimals = 2;
        if (bytes === 0) return '0 Bytes';

        const k = 1024;
        const dm = decimals < 0 ? 0 : decimals;
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

        const i = Math.floor(Math.log(bytes) / Math.log(k));

        return parseFloat((bytes / Math.pow(k, i)).toFixed(dm)) + ' ' + sizes[i];
    }

    var events = {
        formatFileSize: formatFileSize
    };

    exports['default'] = events;
}), 66);

defineModule("Icon", ["CSSCore", "Parent"], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';

    /**
     *
     * @param {HTMLElement} element
     * @param {string} icon
     */
    function setIcon(element, icon) {
        element.setAttribute("data-icon", icon);
        element.textContent = icon;
    }

    module.exports = {
        setIcon: setIcon
    };
}), null);

defineModule("IconButtonAdapter", ["EventType", "CSSCore", "Parent"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';

    var classList = requireModule("components:classlist").icon_button;
    var ARIA_PRESSED = "aria-pressed";

    /**
     *
     * @param {HTMLElement} iconButton
     */
    function toggleIcon(iconButton) {{
        if (requireModule("CSSCore").hasClass(iconButton, classList.on)) {
            requireModule("CSSCore").removeClass(iconButton, classList.on);
            iconButton.setAttribute(ARIA_PRESSED, "false");
        } else {
            requireModule("CSSCore").addClass(iconButton, classList.on);
            iconButton.setAttribute(ARIA_PRESSED, "true");
        }
    }}

    var eventHandler = {
        handleClickEvent: function(target, event) {
            var icons = requireModule("Children").byClass(target, classList.icon);
            var isToggleButton = false;

            icons && icons.forEach(function(icon) {
                if (requireModule("CSSCore").hasClass(icon, classList.icon_on)) {
                    isToggleButton = true;
                }
            });

            if (isToggleButton) {
                toggleIcon(target);
            }
        },
        handleOnChange: function() {
            var callback = this.onChangeCallback;
            var _this = this;
            requireModule("Event").addEventListener(this._root, eventTypes.MOUSE.CLICK, function(event) {
                var isOn = requireModule("CSSCore").hasClass(_this._root, classList.on);
                callback({
                    event: event,
                    isOn: isOn
                });
            });
        },
    };

    var adapter = {
        handleClickEvent: eventHandler.handleClickEvent,
        addClass: function(className) {
            requireModule("CSSCore").addClass(this._root, className);
        },
        removeClass: function(className) {
            requireModule("CSSCore").removeClass(this._root, className);
        },
        setDisabled: function(disabled) {
            this._root.disabled = disabled;
        },
        setAttribute: function(attr, value) {
            this._root.setAttribute(attr, value);
        },
        removeAttribute: function(attr) {
            this._root.removeAttribute(attr, value);
        },
        onChange: function() {
            eventHandler.handleOnChange.call(this);
        }
    };

    module.exports = adapter;
}), null);

defineModule("IconButton", ["IconButtonAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function iconButton(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }
    iconButton.prototype.addClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.addClass.call(this, className);
    };
    iconButton.prototype.removeClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.removeClass.call(this, className);
    };
    iconButton.prototype.hasClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.removeClass.call(this, className);
    };
    iconButton.prototype.setDisabled = function(disabled) {
        if (typeof disabled !== "boolean") throw new TypeError("argument 'disabled' must be a boolean");
        adapter.setDisabled.call(this, disabled);
    };
    iconButton.prototype.setAttribute = function(attr, value) {
        if (typeof attr !== "string") throw new TypeError("argument 'attr' must be a string");
        if (typeof value !== "string") throw new TypeError("argument 'value' must be a string");
        adapter.setAttribute.call(this, attr, value);
    };
    iconButton.prototype.removeAttribute = function(attr) {
        if (typeof attr !== "string") throw new TypeError("argument 'attr' must be a string");
        adapter.removeAttribute.call(this, attr);
    };
    iconButton.prototype.onChange = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.onChangeCallback = callback;
        adapter.onChange.call(this);
    };

    module.exports = iconButton;
}), null);

defineModule("Ripple", ["CSSCore", "Parent"], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';
    var RIPPLE_TYPE_ATTR = "data-event";
    var RIPPLE_ANIMATION_DURATION = 650;
    var classList = requireModule("components:classlist")["ripple"];

    /**
     *
     * @param {MouseEvent} evt
     */
    function getHolder(evt) {
        var holder = evt.target || evt.srcElement;
        var length = holder.childNodes,length;

        if (holder.localName !== 'button' || !length) {
            return requireModule("CSSCore").hasClass(holder, classList['ripple']) ? holder : null;
        }

        for (var i = 0; i < length; i++) {
            var child = holder.childNodes[i];
            if (requireModule("CSSCore").hasClass(child, classList['ripple'])) {
                return child;
            }
        }
        return null;
    }

    /**
     *
     * @param {Element} holder
     * @param {MouseEvent} evt
     * @param {string} evtType
     */
    function setUpPositionAndEvents(holder, evt, evtType) {
        var rect = holder.getBoundingClientRect();
        var x, y;
        x = evt.offsetX;
        if (typeof x !== "undefined") {
            y = evt.offsetY;
        } else {
            x = evt.clientX - rect.left;
            y = evt.clientY - rect.top;
        }
        var ripple = document.createElement("div");
        var max = (rect.width === rect.height) ?
            rect.width * 1.412 :
            Math.sqrt(rect.width * rect.width + rect.height * rect.height);

        var dim = max * 2 + "px";
        ripple.style.width  = dim;
        ripple.style.height = dim;
        ripple.style.marginLeft = -max + x + "px";
        ripple.style.marginTop  = -max + y + "px";

        requireModule("CSSCore").addClass(ripple, classList["child"]);
        holder.appendChild(ripple);
        setTimeout(function () {
            requireModule("CSSCore").addClass(ripple, classList["child_held"]);
        }, 0);

        var releaseEvent = (evtType === "mousedown" ? "mouseup" : "touchend");
        var release = function (e) {
            requireModule("Event").removeEventListener(document, releaseEvent, release);
            requireModule("CSSCore").addClass(ripple, classList["child_done"]);

            setTimeout(function () {
                holder.removeChild(ripple);
                if (!holder.children.length) {
                    requireModule("CSSCore").removeClass(holder, "active");
                    holder.removeAttribute(RIPPLE_TYPE_ATTR);
                }
            }, RIPPLE_ANIMATION_DURATION);
        };
        requireModule("Event").addEventListener(document, releaseEvent, release, true);
        return holder;
    }

    function start(evtType, evt) {
        var holder = getHolder(evt);
        if (!holder) return;

        var prev = holder.getAttribute(RIPPLE_TYPE_ATTR);
        if (prev && prev !== evtType) return false;

        holder.setAttribute(RIPPLE_TYPE_ATTR, evtType);
        setUpPositionAndEvents(holder, evt, evtType);
    }


    module.exports = {
        start: start
    };
}), null);

defineModule("CheckboxAdapter", ["CSSCore", "Parent", "Children"], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';

    var classList = requireModule("components:classlist").checkbox;

    /**
     *
     * @param {HTMLInputElement} checkboxNativeInput
     * @returns
     */
    function getCheckbox(checkboxNativeInput) {
        var checkbox  = requireModule("Parent").byClass(checkboxNativeInput, classList.container);
        var checkmark = requireModule("Children").byClass(checkbox, classList.checkmark)[0];

        return {
            checkbox: checkbox,
            input: checkboxNativeInput,
            checkmark: checkmark
        }
    }

    function addClass(className) {
        var checkbox = getCheckbox(this._root).checkbox;
        requireModule("CSSCore").addClass(checkbox, className);
    }

    function removeClass(className) {
        var checkbox = getCheckbox(this._root).checkbox;
        requireModule("CSSCore").removeClass(checkbox, className);
    }

    function setDisabled(checkboxInput, disabled) {
        var checkbox = getCheckbox(checkboxInput).checkbox;
        disabled ? requireModule("CSSCore").addClass(checkbox, classList.disabled)
                 : requireModule("CSSCore").removeClass(checkbox, classList.disabled);
        disabled ? checkboxInput.disabled = true : checkboxInput.disabled = false;
    }

    function hasNativeControl(checkboxInput) {
        return checkboxInput instanceof HTMLInputElement;
    }

    function setNativeControlAttr(attr, value) {
        this._root.setAttribute(attr, value);
    }

    function removeNativeControlAttr(attr) {
        if (this._root.hasAttribute(attr)) {
            this._root.removeAttribute(attr);
        }
    }

    function handleOnChange() {
        var callback = this.onChangeCallback;
        requireModule("Event").addEventListener(this._root, "change", function(event) {
            callback(event);
        });
    }

    var adapter = {
        addClass: function(className) {
            addClass.call(this, className);
        },
        removeClass: function(className) {
            removeClass.call(this, className);
        },
        setDisabled: function(disabled) {
            setDisabled(this._root, disabled);
        },
        hasNativeControl: function() {
            return hasNativeControl(this._root);
        },
        setNativeControlAttr: function(attr, value) {
            setNativeControlAttr.call(this, attr, value);
        },
        removeNativeControlAttr: function(attr) {
            removeNativeControlAttr.call(this, attr);
        },
        onChange: function() {
            handleOnChange.call(this);
        }
    };

    module.exports = adapter;
}), null);

defineModule("Checkbox", ["CheckboxAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function checkbox(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }
    /**
     * Adds a class to the root element.
     * @param {string} className
     */
    checkbox.prototype.addClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.addClass.call(this, className)
    };
    /**
     * Removes a class from the root element.
     * @param {string} className
     */
    checkbox.prototype.removeClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.removeClass.call(this, className);
    };
    /**
     * Returns true if the component is checked.
     */
    checkbox.prototype.isChecked = function() {
        return this._root.checked;
    };
    /**
     * Sets the checked state of the checkbox.
     * @param {boolean} checked
     */
    checkbox.prototype.setChecked = function(checked) {
        if (typeof checked !== "boolean") throw new TypeError("argument 'checked' must be a boolean");
        this._root.checked = checked;
    };
    /**
     * Sets the disabled state of the checkbox.
     * @param {boolean} disabled
     */
    checkbox.prototype.setDisabled = function(disabled) {
        if (typeof disabled !== "boolean") throw new TypeError("argument 'disabled' must be a boolean");
        adapter.setDisabled.call(this, disabled);
    };
    /**
     * Returns true if the input is present in the component.
     */
    checkbox.prototype.hasNativeControl = function() {
        return adapter.hasNativeControl.call(this);
    };
    /**
     * Sets an HTML attribute to the given value on the native input element.
     * @param {string} attr
     * @param {string} value
     */
    checkbox.prototype.setNativeControlAttr = function(attr, value) {
        if (typeof attr !== "string") throw new TypeError("argument 'attr' must be a string");
        if (typeof value !== "string") throw new TypeError("argument 'value' must be a string");
        adapter.setNativeControlAttr.call(this, attr, value);
    };
    /**
     * Removes an attribute from the native input element.
     * @param {string} attr
     */
    checkbox.prototype.removeNativeControlAttr = function(attr) {
        if (typeof attr !== "string") throw new TypeError("argument 'attr' must be a string");
        adapter.removeNativeControlAttr.call(this, attr);
    };
    /**
     * event handler that should be applied to the checkbox element.
     * @param {Function} callback
     */
    checkbox.prototype.handleChange = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.onChangeCallback = callback;
        adapter.onChange.call(this);
    };

    module.exports = checkbox;
}), null);

defineModule("RadioButtonAdapter", ["CSSCore", "Parent", "Children"], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';

    var classList = requireModule("components:classlist").radio;

    /**
     *
     * @param {HTMLInputElement} radioInput
     * @returns
     */
    function getRadioButton(radioInput) {
        var radio  = requireModule("Parent").byClass(radioInput, classList.container);

        return {
            radio: radio,
            input: radioInput
        }
    }

    function addClass(className) {
        var radio = getRadioButton(this._root).radio;
        requireModule("CSSCore").addClass(radio, className);
    }

    function removeClass(className) {
        var radio = getRadioButton(this._root).radio;
        requireModule("CSSCore").removeClass(radio, className);
    }

    function setDisabled(radioInput, disabled) {
        var radio = getRadioButton(radioInput).radio;
        disabled ? requireModule("CSSCore").addClass(radio, classList.disabled)
                 : requireModule("CSSCore").removeClass(radio, classList.disabled);
        disabled ? radioInput.disabled = true : radioInput.disabled = false;
    }

    function hasNativeControl(radioInput) {
        return radioInput instanceof HTMLInputElement;
    }

    function setNativeControlAttr(attr, value) {
        this._root.setAttribute(attr, value);
    }

    function removeNativeControlAttr(attr) {
        if (this._root.hasAttribute(attr)) {
            this._root.removeAttribute(attr);
        }
    }

    var eventHandler = {
        handleOnChange: function() {
            var callback = this.onChangeCallback;
            requireModule("Event").addEventListener(this._root, "change", function(event) {
                callback(event);
            });
        }
    };

    var adapter = {
        addClass: function(className) {
            addClass.call(this, className);
        },
        removeClass: function(className) {
            removeClass.call(this, className);
        },
        setDisabled: function(disabled) {
            setDisabled(this._root, disabled);
        },
        hasNativeControl: function() {
            return hasNativeControl(this._root);
        },
        setNativeControlAttr: function(attr, value) {
            setNativeControlAttr.call(this, attr, value);
        },
        removeNativeControlAttr: function(attr) {
            removeNativeControlAttr.call(this, attr);
        }
    };

    module.exports = {
        addClass: adapter.addClass,
        removeClass: adapter.removeClass,
        setDisabled: adapter.setDisabled,
        hasNativeControl: adapter.hasNativeControl,
        setNativeControlAttr: adapter.setNativeControlAttr,
        removeNativeControlAttr: adapter.removeNativeControlAttr,
        onChange: eventHandler.handleOnChange
    };
}), null);

defineModule("RadioButton", ["RadioButtonAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function radioButton(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }
    /**
     * Adds a class to the root element.
     * @param {string} className
     */
    radioButton.prototype.addClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.addClass.call(this, className);
    };
    /**
     * Removes a class from the root element.
     * @param {string} className
     */
    radioButton.prototype.removeClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string");
        adapter.removeClass.call(this, className);
    };
    /**
     * Returns true if the component is checked.
     */
    radioButton.prototype.isChecked = function() {
        return this._root.checked;
    };
    /**
     * Sets the checked state of the checkbox.
     * @param {boolean} checked
     */
    radioButton.prototype.setChecked = function(checked) {
        if (typeof checked !== "boolean") throw new TypeError("argument 'checked' must be a boolean");
        this._root.checked = checked;
    };
    /**
     * Sets the disabled state of the checkbox.
     * @param {boolean} disabled
     */
    radioButton.prototype.setDisabled = function(disabled) {
        if (typeof disabled !== "boolean") throw new TypeError("argument 'disabled' must be a boolean");
        adapter.setDisabled.call(this, disabled);
    };
    /**
     * Returns true if the input is present in the component.
     */
    radioButton.prototype.hasNativeControl = function() {
        return adapter.hasNativeControl.call(this);
    };
    /**
     * Sets an HTML attribute to the given value on the native input element.
     * @param {string} attr
     * @param {string} value
     */
    radioButton.prototype.setNativeControlAttr = function(attr, value) {
        if (typeof attr !== "string") throw new TypeError("argument 'attr' must be a string");
        if (typeof value !== "string") throw new TypeError("argument 'value' must be a string");
        adapter.setNativeControlAttr.call(this, attr, value);
    };
    /**
     * Removes an attribute from the native input element.
     * @param {string} attr
     */
    radioButton.prototype.removeNativeControlAttr = function(attr) {
        if (typeof attr !== "string") throw new TypeError("argument 'attr' must be a string");
        adapter.removeNativeControlAttr.call(this, attr);
    };
    /**
     * event handler that should be applied to the checkbox element.
     * @param {Function} callback
     */
    radioButton.prototype.handleChange = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.onChangeCallback = callback;
        adapter.onChange.call(this);
    };

    module.exports = radioButton;
}), null);

defineModule("SegmentedButtonsAdapter", ["EventType", "CSSCore"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';

    var classList = requireModule("components:classlist")["segmented_button"];

    function addActiveStateClass(target, shown) {
        var checkMark = target.querySelector('.' + classList.check_mark);
        if (checkMark) {
            setTimeout(function() {
                requireModule("CSSCore").addClass(checkMark, classList.check_mark_active);
            }, 200);
        }
    }

    function select(target, parent) {
        var buttons = parent.querySelectorAll('.' + classList.button);
        var isSingleSelect = requireModule("CSSCore").hasClass(parent, classList.parent_single_select);
        var isMultipleSelect = requireModule("CSSCore").hasClass(parent, classList.parent_multiple_select);

        if (isMultipleSelect) {
            requireModule("CSSCore").toggleClass(target, classList.selected);
        } else if (isSingleSelect) {
            for (var i = 0; i < buttons.length; i++) {
                var button = buttons[i];
                if (button === target) {
                    requireModule("CSSCore").toggleClass(target, classList.selected);
                } else {
                    requireModule("CSSCore").removeClass(button, classList.selected);
                }
            }
        }
    }

    function segmentedButton(root) {
        this._root = root;
    }
    segmentedButton.prototype.getButton = function() {
        return this._root;
    };
    segmentedButton.prototype.isSelected = function() {
        return requireModule("CSSCore").hasClass(this._root, classList.selected);
    }

    function start(event, target) {
        var parent = requireModule("Parent").byClass(target, classList.parent);
        select(target, parent);
    }

    /**
     * Handle onchange event to each segmented button
     * @param {Function} callback
     * @returns
     */
    function onChange(callback) {
        if (typeof callback !== "function") return;
        var buttons = requireModule("Children").byClass(this._root, classList.button);
        if (buttons.length <= 0) return;

        for (var i = 0; i < buttons.length; i++) {
            requireModule("Event").addEventListener(buttons[i], eventTypes.MOUSE.CLICK, function(event) {
                callback(new segmentedButton(this));
            });
        }
    }

    /**
     * Returns the selected buttons
     */
    function getSelected() {
        var buttons = requireModule("Children").byClass(this._root, classList.button);
        if (buttons == null) return;
        return buttons.filter(function(button) {
            return requireModule("CSSCore").hasClass(button, classList.selected);
        });
    }

    module.exports = {
        start: start,
        onChange: onChange,
        getSelected: getSelected
    };
}), null);

defineModule("SegmentedButtons", ["$", "SegmentedButtonsAdapter"], (function (global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';

    function segmentedButtons(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }

    /**
     *
     * @param {number} index
     */
    segmentedButtons.prototype.setSelectedByIndex = function(index) {
        if (typeof index !== "number") return;
    };

    /**
     *
     * @param {Function} callback
     */
    segmentedButtons.prototype.onChange = function(callback) {
        requireModule("SegmentedButtonsAdapter").onChange.call(this, callback);
    };

    segmentedButtons.prototype.getSelected = function() {
        return requireModule("SegmentedButtonsAdapter").getSelected.call(this);
    };

    module.exports = segmentedButtons;
}), null);

defineModule("TabAdapter", ["EventType", "Child", "Children", "CSSCore", "Event", "KeyboardEvent", "Parent"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';
    
    var classList = requireModule("components:classlist").tab;

    var ARIA_SELECTED = "aria-selected";
    var TAB_INDEX = "tabindex";
    var FOCUSED_TAB = "data-focused-tab-index";

    var eventHandler = {
        handleClickEvent: function(target, event) {
            changeTab(target);
        },
        handleFocusEvent: function(tab, event) {
            var tabbar = getTabBar(tab);
            var tabs = getTabs(tabbar);
            tabbar.setAttribute(FOCUSED_TAB, tabs.indexOf(tab));

            if (event.type === 'focusin' || (eventTypes && event.type === eventTypes.FOCUSIN)) {
                requireModule("Event").addEventListener(tab, 'keydown', eventHandler.handleKeyboardEvent);
            } else {
                requireModule("CSSCore").removeClass(tab, classList.focused);
                requireModule("Event").removeEventListener(tab, 'keydown', eventHandler.handleKeyboardEvent);
            }
        },
        handleKeyboardEvent: function(event) {
            var tab = event.target;

            if (requireModule("KeyboardEvent").matchKeys(37, "ArrowLeft", event)) {
                event.preventDefault();
                navigateBetween(tab, "left");
            }

            if (requireModule("KeyboardEvent").matchKeys(39, "ArrowRight", event)) {
                event.preventDefault();
                navigateBetween(tab, "right");
            }

            if (requireModule("KeyboardEvent").matchKeys(13, "Enter", event)) {
                event.preventDefault();
                changeTab(tab);
            }
        },
        handleInputEvent: function(event) {}
    };
    
    /**
     * Animates the indicator from the previous tab's position to the new tab's position.
     * @param {HTMLButtonElement} previousTab The previously active tab.
     * @param {HTMLButtonElement} newTab The newly selected tab.
     */
    function changeIndicatorPosition(previousTab, newTab) {
        var newIndicator = getIndicator(newTab);
        var newIndicatorContent = getIndicatorContent(newIndicator);

        var prevRect = previousTab.getBoundingClientRect();
        var newRect = newTab.getBoundingClientRect();

        var scaleX = prevRect.width / newRect.width;
        var translateX = prevRect.left - newRect.left;
        
        requireModule("CSSCore").addClass(newIndicator, classList.no_transition);
        newIndicatorContent.style.transform = `translateX(${translateX}px) scaleX(${scaleX})`;

        newIndicator.getBoundingClientRect();

        requireModule("CSSCore").removeClass(newIndicator, classList.no_transition);
        newIndicatorContent.style.transform = '';

        var onTransitionEnd = function(event) {
            if (event.propertyName === 'transform') {
                newIndicatorContent.style.transform = '';
                requireModule("Event").removeEventListener(newIndicatorContent, 'transitionend', onTransitionEnd);
            }
        };
        requireModule("Event").addEventListener(newIndicatorContent, 'transitionend', onTransitionEnd);
    }

    /**
     * Handles the primary logic for switching tabs, including the initial selection.
     * @param {HTMLButtonElement} newTab The tab that was just selected.
     */
    function changeTab(newTab) {
        var tabbar = getTabBar(newTab);
        var previousTab = tabbar.querySelector('[role="tab"][aria-selected="true"]');

        // If the clicked tab is already the active one, do nothing.
        if (previousTab === newTab) {
            return;
        }

        // If there is a previously selected tab, deactivate it and animate the indicator.
        if (previousTab) {
            // Animate the indicator from the old position to the new one.
            changeIndicatorPosition(previousTab, newTab);
            // Deactivate the old tab.
            setActiveState(previousTab, false);
        }
        
        // Activate the newly selected tab.
        // This runs on the first click (when previousTab is null) and all subsequent clicks.
        setActiveState(newTab, true);
    }

    function navigateBetween(tab, direction) {
        var tabbar = getTabBar(tab);
        var tabs = getTabs(tabbar);
        var currentIndex = parseInt(tabbar.getAttribute(FOCUSED_TAB), 10) || 0;
        var nextIndex;

        if (direction === "left") {
            nextIndex = currentIndex - 1;
            if (nextIndex < 0) {
                nextIndex = tabs.length - 1;
            }
        } else if (direction === "right") {
            nextIndex = currentIndex + 1;
            if (nextIndex >= tabs.length) {
                nextIndex = 0;
            }
        }

        for (var i = 0; i < tabs.length; i++) {
            requireModule("CSSCore").removeClass(tabs[i], classList.focused);
        }

        var nextTab = tabs[nextIndex];
        if (nextTab) {
            requireModule("CSSCore").addClass(nextTab, classList.focused);
            nextTab.focus();
        }
    }

    /**
     * Sets the active or inactive state for a tab and its indicator.
     * @param {HTMLButtonElement} tab The tab to modify.
     * @param {boolean} active Whether the tab should be active.
     */
    function setActiveState(tab, active) {
        tab.setAttribute(ARIA_SELECTED, active ? "true" : "false");
        tab.setAttribute(TAB_INDEX, active ? "0" : "-1");

        var indicator = getIndicator(tab);

        if (active) {
            requireModule("CSSCore").addClass(tab, classList.active);
            requireModule("CSSCore").addClass(indicator, classList.indicator_active);
        } else {
            requireModule("CSSCore").removeClass(tab, classList.active);
            requireModule("CSSCore").removeClass(indicator, classList.indicator_active);
        }
    }

    // --- Helper Functions ---

    function getTabBar(tab) {
        return requireModule("Parent").byClass(tab, classList.tabbar);
    }

    function getTabs(tabbar) {
        return requireModule("Children").byClass(tabbar, classList.scroller_content);
    }

    function getIndicator(tab) {
        return requireModule("Child").byClass(tab, classList.indicator);
    }

    function getIndicatorContent(indicator) {
        return indicator.querySelector('.' + classList.indicator_content);
    }

    module.exports = {
        handleClickEvent: eventHandler.handleClickEvent,
        handleFocusEvent: eventHandler.handleFocusEvent,
        handleKeyboardEvent: eventHandler.handleKeyboardEvent,
        handleInputEvent: eventHandler.handleInputEvent,
    };
}), null);

defineModule("TabBar", ["TabAdapter"], function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    /**
     *
     * @param {string} id
     */
    function tabbar(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }
    /**
     * Sets the tab at the given index to be activated.
     * @param {number} index
     */
    tabbar.prototype.setActiveTab = function(index) {
        if (typeof index !== "number") throw new TypeError("argument 'index' must be a number");
        adapter.setActiveTab.call(this, index);
    };
    /**
     * Deactivates the Tab at the given index.
     * @param {number} index
     */
    tabbar.deactivateTabAtIndex = function(index) {
        if (typeof index !== "number") throw new TypeError("argument 'index' must be a number");
        adapter.deactivateTabAtIndex.call(this, index);
    };
    /**
     * Returns the number of child Tab components.
     * @returns {Array<adapter.Tab>}
     */
    tabbar.prototype.getTabListLength = function() {
        return adapter.getTabListLength.call(this);
    };

    tabbar.prototype.onTabChange = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.onChangeCallback = callback;
        adapter.onTabChange.call(this);
    };

    module.exports = tabbar;
}, null);

defineModule("TextfieldAdapter", ["Child", "Children", "CSSCore"], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';
    var classList = requireModule("components:classlist")["textfield"];
    var FLOATIING_LABEL_PREFIX = "-floating-label";
    var SUPPORTING_TEXT_PREFIX = "-supporting-text";
    
    var inputTypesWithPicker = ["date", "month", "week", "time", "datetime-local", "color", "file"];
    
    function hasDialogPicker(type) {
        return inputTypesWithPicker.indexOf(type) > -1;
    }

    /**
     * Match the input type
     * @param {HTMLInputElement} textfieldInput
     * @param {string} type
     * @param {Function} callback
     */
    function matchTextfieldInputType(textfieldInput, type, callback) {
    }

    function handleRequiredTextfieldInput(textfieldInput, eventType) {
        // Shaking floating label if text input it's empty
        if (eventType == "focusout") {
            if (textfieldInput.value.length === 0) {
                setErrorState(textfieldInput, true);
            } else {
                setErrorState(textfieldInput, false);
            }
        }
    }

    function handlePatternTextfieldInput(textfieldInput, eventType) {
        // If pattern is not valid, add error class to textfield
        if (eventType == "focusout") {
            var pattern = new RegExp(textfieldInput.getAttribute("pattern"));
            if (!pattern.test(textfieldInput.value)) {
                shakeFloatingLabel(getTextfield(textfieldInput).floatingLabel);
                setErrorState(textfieldInput, true);
            } else {
                setErrorState(textfieldInput, false);
            }
        }
    }

    function matchTailingIconAction(trailingIcon, action, callback) {
        var data = "data-icon";
        if (trailingIcon.hasAttribute(data) && trailingIcon.getAttribute(data) == action) {
            return true;
        }
        return false;
    }

    function setTrailingIconAction(trailingIcon, action) {
        var data = "data-icon";
        trailingIcon.setAttribute(data, action);
        trailingIcon.innerText = action;
    }

    function setFocusedState(textfield, focused) {
        if (focused) {
            requireModule("CSSCore").addClass(textfield, classList.focused);
            // Checking if textfield has not floating label
            if (!requireModule("CSSCore").hasClass(textfield, classList.no_label)) {
                addFloatingClass(textfield);
            }
        } else {
            requireModule("CSSCore").removeClass(textfield, classList.focused);
            removeFloatingClass(textfield);
        }
    }

    function addFloatingClass(textfield) {
        requireModule("CSSCore").addClass(textfield, classList.label_floating);
    }

    function removeFloatingClass(textfield) {
        requireModule("CSSCore").removeClass(textfield, classList.label_floating);
    }

    function shakeFloatingLabel(floatingLabel) {
        if (floatingLabel == null) return;
        requireModule("CSSCore").addClass(floatingLabel, classList.label_shake);
        setTimeout(function() {
            requireModule("CSSCore").removeClass(floatingLabel, classList.label_shake);
        }, 260);
    }
    
    /**
     *
     * @param {HTMLInputElement} textfieldInput
     * @param {boolean} error
     */
    function setErrorState(textfieldInput, error) {
        var textfield = getTextfield(textfieldInput).textfield;

        error ? requireModule("CSSCore").addClass(textfield,    classList.error) :
                requireModule("CSSCore").removeClass(textfield, classList.error);
        textfieldInput.setAttribute("aria-invalid", error ? "true" : "false");
    }

    function setDisabledState(textfieldInput, disabled) {
        var textfield = getTextfield(textfieldInput).textfield;
        disabled ? requireModule("CSSCore").addClass(textfield,    classList.disabled)
                 : requireModule("CSSCore").removeClass(textfield, classList.disabled);
        disabled ? textfieldInput.disabled = true : textfieldInput.removeAttribute("disabled");
    }

    function setFilenameToInputFileLabel(textfieldFileInput, files) {
        var textfield = getTextfield(textfieldFileInput).textfield;
        var fileLabelContainer = requireModule("Children").byClass(textfield, classList.input_file_label)[0];
        var fileSizeContainer  = requireModule("Children").byClass(textfield, classList.input_file_size)[0];
 
        if (!fileLabelContainer) return;
        
        if (!fileSizeContainer) return;

        if (files.length == 1) {
            console.log(files, files[0]);
            var filename = files[0].name;
            var filesize = requireModule("components:utils").formatFileSize(files[0].size);

            fileLabelContainer.innerText = filename;
            fileLabelContainer.title = filename;
            fileSizeContainer.innerText  = filesize;
            fileSizeContainer.title = filesize;
        }
    }
 
    var eventHandler = {
        handleChangeEvent: function(target, event) {
            var textfield = getTextfield(target).textfield;
            if (target.type == "file") {
                var files = target.files;
                setFilenameToInputFileLabel(target, files);
            }
        },
        handleClickEvent: function(target, event) {
            if (hasDialogPicker(target.type)) {
                if ('showPicker' in HTMLInputElement.prototype) {
                    target.showPicker();
                }
            }
        },
        handleFocusEvent: function(target, event) {
            var eventType = event.type;
            setFocusedState(getTextfield(target).textfield, eventType == "focusin");

            var textfield = getTextfield(target).textfield;
            var input = getTextfield(target).input;
            var label = getTextfield(target).floatingLabel;
            var isEmpty = input.value.length === 0 || input.value.trim() == "";

            if (label) {
                if (eventType == "focusin") {
                    requireModule("CSSCore").addClass(label, classList.label_float_above);
                } else {
                    console.log(input.type, input.value);
                    if (isEmpty && !hasDialogPicker(input.type)) {
                        requireModule("CSSCore").removeClass(label, classList.label_float_above);
                    }
                }
            } else if (eventType == "focusout") {
                if (!requireModule("CSSCore").hasClass(textfield, classList.no_label)) {
                    if (isEmpty) {
                        requireModule("CSSCore").removeClass(textfield, classList.label_floating);
                    }
                }
            }

            // Handling outlined textfield
            if (getTextfield(target).getVariant() === "outlined") {
                var notchedOutline = requireModule("Children").byClass(getTextfield(target).textfield, classList.notched_outline)[0];
                if (notchedOutline) {
                    if (eventType == "focusin") {
                        requireModule("CSSCore").addClass(notchedOutline, classList.notched_outline_notched);
                    } else {
                        if (isEmpty && !hasDialogPicker(input.type)) {
                            requireModule("CSSCore").removeClass(notchedOutline, classList.notched_outline_notched);
                        }
                    }
                }
            }

            // Handling filled textfield
            if (getTextfield(target).getVariant() === "filled") {
                // Activating line ripple
                var lineRipple = requireModule("Children").byClass(getTextfield(target).textfield, classList.line_ripple)[0];
                if (lineRipple) {
                    eventType == "focusin" ? requireModule("CSSCore").addClass(lineRipple, classList.line_ripple_active)
                        : requireModule("CSSCore").removeClass(lineRipple, classList.line_ripple_active);
                }
            }
            
            

            // Handling required textfield input
            if (input.hasAttribute("required")) {
                handleRequiredTextfieldInput(input, eventType);
            }

            // Handling pattern textfield input
            if (input.hasAttribute("pattern")) {
                handlePatternTextfieldInput(input, eventType);
            }

        },
        handleKeyboardEvent: function(target, event) {
            var eventType = event.type;
            var textfield = getTextfield(target).textfield;

            if (eventType == "keyup") {
                if (target.hasAttribute("pattern")) {
                    var pattern = new RegExp(target.getAttribute("pattern"));
                    // If pattern is not valid, add error class to textfield
                    if (!pattern.test(target.value)) {
                        requireModule("CSSCore").addClass(textfield, classList.error);
                    } else {
                        requireModule("CSSCore").removeClass(textfield, classList.error);
                    }
                }
            } else if (eventType == "keydown") {

            }
        },
        handleInputEvent: function(target, event) {
            var textfield = getTextfield(target);

            // handling character counter
            if (textfield.input.hasAttribute("maxlength")) {
                var characterCounter = requireModule("Children").byClass(textfield.textfield.parentNode, classList.character_counter)[0];
                if (characterCounter) {
                    var maxLength = parseInt(textfield.input.getAttribute("maxlength"), 10);
                    var currentLength = textfield.input.value.length;
                    characterCounter.textContent = currentLength + " / " + maxLength;
                }
            }
        },
        handleTrailingIconAction: function(trailingIcon) {
            var textfieldInput = requireModule("Child").byClass(trailingIcon.parentNode, classList.input);
            var textfield = getTextfield(textfieldInput);

            if (matchTailingIconAction(trailingIcon, "visibility")) {
                if (textfieldInput.type == "password") {
                    textfieldInput.type = "text";
                }
                setTrailingIconAction(trailingIcon, "visibility_off");
            } else if (matchTailingIconAction(trailingIcon, "visibility_off")) {
                if (textfieldInput.type == "text") {
                    textfieldInput.type = "password";
                }
                setTrailingIconAction(trailingIcon, "visibility");
            }

            if (matchTailingIconAction(trailingIcon, "clear")) {
                textfield.input.value = "";
                textfield.input.focus();
                var inputEvent = new Event("focusin", { bubbles: true });
                textfield.input.dispatchEvent(inputEvent);
            }

            if (matchTailingIconAction(trailingIcon, "copy")) {
                requireModule("DOMUtils").copy(textfield.input);
            }
        }
    };


    var adapter = {
        setDisabled: function(disabled) {
            setDisabledState(this._root, disabled);
        },
        setHelperText: function(text, options) {
            var textfield = getTextfield(this._root).textfield;
            var helperText = requireModule("$").fromIDOrElement(this._root.id + SUPPORTING_TEXT_PREFIX);

            //
            if (text == "") {
                if (helperText !== null) {
                    var helperLine = helperText.parentNode;
                    helperLine.parentNode.removeChild(helperLine);
                }
                return;
            }

            // Creating helper text element if it doesn't exists
            if (helperText == null) {
                // Creating helper line if doesn't exists
                var helperLine = document.createElement("div");
                requireModule("CSSCore").addClass(helperLine, classList.helper_line);

                helperText = document.createElement("p");
                helperText.setAttribute("id", this._root.id + SUPPORTING_TEXT_PREFIX);
                requireModule("CSSCore").addClass(helperText, classList.helper_text);
                helperText.setAttribute("aria-live", "polite");
                helperText.textContent = text;

                if (options.persistent) {
                    requireModule("CSSCore").addClass(helperText, classList.helper_text_persistent);
                }

                if (options.validationMsg) {
                    requireModule("CSSCore").addClass(helperText, classList.helper_text_validation_msg);
                }

                helperLine.appendChild(helperText);
                textfield.parentNode.insertBefore(helperLine, textfield.nextSibling);

            }
            helperText.textContent = text;
        },
        setError: function(error) {
            setErrorState(this._root, error);
        },
        getVariant: function() {
            var textfield = getTextfield(this._root).textfield;
            return textfield.getAttribute("data-variant") || "";
        },
        getValue: function() {
            return this.value;
        }
    };

    /**
     * Get all components of c_textfield
     * @param {HTMLInputElement} element
     */
    function getTextfield(element) {
        var textfield = requireModule("Parent").byClass(element, classList.container);
        var textfieldInput = element;
        var floatingLabel = requireModule("Children").byClass(textfield, classList.label);

        return {
            textfield: textfield,
            input: textfieldInput,
            floatingLabel: floatingLabel != null ? floatingLabel[0] : null,
            getVariant: function() {
                var variant = requireModule("CSSCore").hasClass(textfield, classList.filled) ? "filled" : "outlined";
                return variant;
            }
        }
    }

    module.exports = {
        handleChangeEvent: eventHandler.handleChangeEvent,
        handleClickEvent: eventHandler.handleClickEvent,
        handleFocusEvent: eventHandler.handleFocusEvent,
        handleKeyboardEvent: eventHandler.handleKeyboardEvent,
        handleInputEvent: eventHandler.handleInputEvent,
        handleTrailingIconAction: eventHandler.handleTrailingIconAction,
        getTextfield: getTextfield,
        setDisabled: adapter.setDisabled,
        setHelperText: adapter.setHelperText,
        setError: adapter.setError,
        getVariant: adapter.getVariant,
        getValue: adapter.getValue
    };
}), null);

defineModule("Textfield", ["TextfieldAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    /**
     *
     * @param {string} id
     */
    function textfield(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }

    textfield.prototype.getVariant = function() {
        return adapter.getVariant.call(this);
    };

    textfield.prototype.setDisabled = function(disabled) {
        if (typeof disabled !== "boolean") throw new TypeError("argument 'disabled' must be a boolean type");
        adapter.setDisabled.call(this, disabled);
    };

    textfield.prototype.setError = function(error) {
        if (typeof error !== "boolean") throw new TypeError("argument 'error' must be a boolean type");
        adapter.setError.call(this, error);
    };

    textfield.prototype.setHelperText = function(text, options) {
        if (typeof text !== "string") throw new TypeError("argument 'text' must be a string type");
        adapter.setHelperText.call(this, text, options);
    };

    textfield.prototype.getValue = function() {
        return adapter.getValue.call(this._root);
    };

    module.exports = textfield;
}), null);

defineModule("SwitchAdapter", ["CSSCore", "Child", "Children"], (function(global, requireModule, requireDynamic, requireLazy, module, exports) {
    'use strict';

    var classList = requireModule("components:classlist").switch;

    function getSwitch(switchInput) {
        var mSwitch = requireModule("Parent").byClass(switchInput, classList.container);
        return {
            switch: mSwitch,
            input: switchInput
        }
    }

    function addClass(switchElement, className) {
        var mSwitch = getSwitch(switchElement).switch;
        requireModule("CSSCore").addClass(mSwitch, className);
    }

    function removeClass(switchElement, className) {
        var mSwitch = getSwitch(switchElement).switch;
        requireModule("CSSCore").removeClass(mSwitch, className);
    }

    /**
     *
     * @param {HTMLInputElement} switchElement
     * @param {boolean} checked
     */
    function setCheckedState(switchElement, checked) {
        var mSwitch = getSwitch(switchElement);

        checked ? requireModule("CSSCore").addClass(mSwitch.switch, classList.checked)
                : requireModule("CSSCore").removeClass(mSwitch.switch, classList.checked);
        switchElement.setAttribute("aria-checked", checked ? "true" : "false");
        switchElement.checked = checked;
    }

    function setDisabledState(switchElement, disabled) {
        var mSwitch = getSwitch(switchElement).switch;
        if (disabled) {
            requireModule("CSSCore").addClass(mSwitch, classList.disabled);
            switchElement.setAttribute("aria-disabled", "true");
            switchElement.disabled = true;
        } else {
            requireModule("CSSCore").removeClass(mSwitch, classList.disabled);
            switchElement.removeAttribute("aria-disabled");
            switchElement.disabled = false;
        }
    }

    var eventHandler = {
        /**
         *
         * @param {HTMLInputElement} switchElement
         * @param {MouseEvent} event
         */
        handleClickEvent: function(switchElement, event) {
            if (switchElement.getAttribute("aria-checked") == "true") {
                setCheckedState(switchElement, false);
            } else if (switchElement.getAttribute("aria-checked") == "false") {
                setCheckedState(switchElement, true);
            }
        }
    };

    var adapter = {
        addClass: function(className) {
            addClass(this._root, className);
        },
        removeClass: function(className) {
            removeClass(this._root, className);
        },
        setChecked: function(checked) {
            setCheckedState(this._root, checked);
        },
        setDisabled: function(disabled) {
            setDisabledState(this._root, disabled);
        }
    };

    module.exports = {
        addClass: adapter.addClass,
        removeClass: adapter.removeClass,
        setChecked: adapter.setChecked,
        setDisabled: adapter.setDisabled,
        handleClickEvent: eventHandler.handleClickEvent
    };
}), null);

defineModule("Switch", ["SwitchAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function mSwitch(id) {
        this._root = requireModule("$").fromIDOrElement(id);
    }
    mSwitch.prototype.addClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string type");
        adapter.addClass.call(this, className);
    };
    mSwitch.prototype.removeClass = function(className) {
        if (typeof className !== "string") throw new TypeError("argument 'className' must be a string type");
        adapter.removeClass.call(this, className);
    };
    mSwitch.prototype.setChecked = function(checked) {
        if (typeof checked !== "boolean") throw new TypeError("argument 'checked' must be a boolean type");
        adapter.setChecked.call(this, checked);
    };
    mSwitch.prototype.setDisabled = function(disabled) {
        if (typeof disabled !== "boolean") throw new TypeError("argument 'disabled' must be a boolean type");
        adapter.setDisabled.call(this, disabled);
    };

    module.exports = mSwitch;
}), null);

defineModule("SnackbarAdapter", ["EventType", "CSSCore", "Child", "Children"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';

    var classList = requireModule("components:classlist").snackbar;

    var queued = [];
    var currentlyShowing = null;
    var closeTimeoutId = null;
    // 1. ADD THIS VARIABLE: To store the element that needs focus returned.
    var elementToReturnFocusTo = null;

    var eventHandler = {
        handleKeyboardEvent: function(event) {
            if (event.key === 'Escape') {
                close();
            }
        }
    };

    function handleActionEvents(snackbarInstance) {
        var actionIcon, actionButton;
        var snackbarElement = snackbarInstance._root;

        // Does the action button has an event handler?
        if (snackbarInstance.actionButtonCallback) {
            actionButton = requireModule("Children").byClass(snackbarElement, classList.action)[0];
            if (!actionButton) return;
            requireModule("Event").addEventListener(actionButton, eventTypes.MOUSE.CLICK, snackbarInstance.actionButtonCallback);
        }

        // Does the icon button has an event hadler?
        if (snackbarInstance.actionIconCallback) {
            actionIcon = requireModule("Children").byClass(snackbarElement, classList.dismiss)[0];
            if (!actionIcon) return;
            requireModule("Event").addEventListener(actionIcon, eventTypes.MOUSE.CLICK, snackbarInstance.actionIconCallback);
        }

    }

    function open(snackbarInstance) {
        if (currentlyShowing) {
            if (!queued.includes(snackbarInstance)) {
                 queued.push(snackbarInstance);
            }
            return;
        }

        // 2. ADD THIS LINE: Before showing the snackbar, save the currently focused element.
        elementToReturnFocusTo = document.activeElement;

        currentlyShowing = snackbarInstance;
        var snackbarElement = currentlyShowing._root;

        handleActionEvents(snackbarInstance, true);

        var label = snackbarElement.querySelector('.' + classList.label);
        if (label && currentlyShowing.text) {
            label.textContent = currentlyShowing.text;
        }

        var actionButton = snackbarElement.querySelector('.' + classList.action);
        if (actionButton && currentlyShowing.actionButtonText) {
            actionButton.textContent = currentlyShowing.actionButtonText;
        }

        // snackbarElement.setAttribute('aria-hidden', 'false');
        // snackbarElement.setAttribute('aria-live', 'assertive');

        if (currentlyShowing.closeOnEscape) {
            document.addEventListener('keydown', eventHandler.handleKeyboardEvent);
        }

        requireModule("CSSCore").addClass(snackbarElement, classList.opening);

        setTimeout(function() {
            requireModule("CSSCore").removeClass(snackbarElement, classList.opening);
            requireModule("CSSCore").addClass(snackbarElement, classList.open);
        }, 10);

        closeTimeoutId = setTimeout(function() {
            close();
        }, currentlyShowing.timeoutMs || 5000);
    }

    function close() {
        if (!currentlyShowing) {
            return;
        }

        var closingSnackbar = currentlyShowing;
        var snackbarElement = closingSnackbar._root;
        var surfaceElement  = requireModule("Child").byClass(snackbarElement, classList.surface);

        if (!surfaceElement) return;

        if (closeTimeoutId) {
            clearTimeout(closeTimeoutId);
            closeTimeoutId = null;
        }

        currentlyShowing = null;

        requireModule("CSSCore").removeClass(snackbarElement, classList.open);
        requireModule("CSSCore").addClass(snackbarElement, classList.closing);

        surfaceElement.addEventListener('transitionend', function handler() {
            surfaceElement.removeEventListener('transitionend', handler);

            // 3. ADD THIS BLOCK: Move focus BEFORE hiding the element.
            if (elementToReturnFocusTo) {
                elementToReturnFocusTo.focus();
            }

            requireModule("CSSCore").removeClass(snackbarElement, classList.closing);
            // snackbarElement.setAttribute('aria-hidden', 'true');

            if (closingSnackbar.closeOnEscape) {
                document.removeEventListener('keydown', eventHandler.handleKeyboardEvent);
            }

            // Handling onClose
            if (closingSnackbar.closeCallback) {
                var callback = closingSnackbar.closeCallback;
                callback();
            }

            if (queued.length > 0) {
                var nextSnackbar = queued.shift();
                open(nextSnackbar);
            }
        });
    }

    var adapter = {
        open: function(snackbarInstance) {
            open(snackbarInstance);
        },
        close: function() {
            close();
        },
        handleClickEvent: function() {
            close();
        }
    };

    module.exports = adapter;
}), null);

defineModule("Snackbar", ["SnackbarAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function snackbar(id) {
        this._root = requireModule("$").fromIDOrElement(id);
        this.closeOnEscape = false;
        this.timeoutMs = 5000;
    }
    snackbar.prototype.setText = function(text) {
        if (typeof text !== "string") throw new TypeError("argument 'text' must be a string type");
        this.text = text;
        return this;
    };
    snackbar.prototype.setActionButtonText = function(text) {
        if (typeof text !== "string") throw new TypeError("argument 'text' must be a string type");
        this.actionButtonText = text;
        return this;
    };
    snackbar.prototype.open = function() {
        // Pass the current instance 'this' to the adapter's open method.
        adapter.open(this);
    };
    snackbar.prototype.close = function() {
        // The close function now intelligently closes the currently active snackbar.
        adapter.close();
    };
    snackbar.prototype.setCloseOnEscape = function(closeOnEscape) {
        if (typeof closeOnEscape !== "boolean") throw new TypeError("argument 'closeOnEscape' must be a boolean type");
        this.closeOnEscape = closeOnEscape;
        return this;
    };
    snackbar.prototype.setTimeoutMs = function(timeoutMs) {
         if (typeof timeoutMs !== "number") throw new TypeError("argument 'timeoutMs' must be a number type");
         if (timeoutMs < 4000 || timeoutMs > 10000) throw new RangeError("argument 'timeoutMs' must be between 4000 and 10000");
         this.timeoutMs = timeoutMs;
         return this;
    };
    snackbar.prototype.handleActionButtonClick = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.actionButtonCallback = callback;
        return this;
    };
    snackbar.prototype.handleActionIconClick = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.actionIconCallback = callback;
        return this;
    };
    snackbar.prototype.onClose = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.closeCallback = callback;
        return this;
    };

    module.exports = snackbar;
}), null);

defineModule("NavigationDrawerAdapter", ["EventType", "CSSCore", "Child", "Children"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';

    var classList = requireModule("components:classlist").navigation_drawer;

    /**
     *
     * @param {HTMLElement} item
     * @param {boolean} active
     */
    function setActiveState(item, active) {
        var listClassList = requireModule("components:classlist").list;
        active ? requireModule("CSSCore").addClass(item, listClassList.item_activated)
               : requireModule("CSSCore").removeClass(item, listClassList.item_activated);
        item.setAttribute("tabindex", active ? "0" : "-1");
        item.setAttribute("aria-selected", active ? "true" : "false");
    }

    var eventHandler = {
        /**
         *
         * @param {HTMLElement} itemElement
         * @param {MouseEvent} event
         */
        handleClickEvent: function(itemElement, event) {
            if (itemElement.tagName.toLowerCase() == "a" || itemElement.href == "#") {
                event.preventDefault();
            }

            var itemChildren = requireModule("Children").byClass(itemElement.parentNode, classList.item);
            itemChildren.forEach(function(item) {
                setActiveState(item, false);
            });
            setActiveState(itemElement, true);
        }
    };

    var adapter = {
        handleClickEvent: eventHandler.handleClickEvent,
        open: function() {}
    };

    module.exports = adapter;
}), null);

defineModule("NavigationDrawer", ["SnackbarAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function navigationDrawer(id) {
        this._root = requireModule("$").fromIDOrElement(id);
        this.closeOnEscape = false;
    }
    navigationDrawer.prototype.open = function() {
        // Pass the current instance 'this' to the adapter's open method.
        adapter.open(this);
    };
    navigationDrawer.prototype.close = function() {
        // The close function now intelligently closes the currently active snackbar.
        adapter.close();
    };
    navigationDrawer.prototype.setCloseOnEscape = function(closeOnEscape) {
        if (typeof closeOnEscape !== "boolean") throw new TypeError("argument 'closeOnEscape' must be a boolean type");
        this.closeOnEscape = closeOnEscape;
        return this;
    };
    snackbar.prototype.onClose = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.closeCallback = callback;
        return this;
    };

    module.exports = snackbar;
}), null);


defineModule("DialogAdapter", ["EventType", "CSSCore", "Child", "Children"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';

    var classList = requireModule("components:classlist").dialog;

    function open() {
        var container = this._root;
        if (container) {
            document.body.style.overflow = "hidden";
            requireModule("components:state").ACTIVE_DIALOG = container;
            requireModule("CSSCore").addClass(container, classList.opening);

            // Allow the browser to apply the 'opening' class styles
            setTimeout(function() {
                // Now, add the 'open' class to trigger the transition
                requireModule("CSSCore").addClass(container, classList.open);

                // Clean up the 'opening' class after the animation is complete
                setTimeout(function() {
                    requireModule("CSSCore").removeClass(container, classList.opening);
                }, 150); // This timeout should match your CSS transition duration
            }, 1); // A very short timeout to ensure the next frame
        }
    }

    function close() {
        var dialog = requireModule("components:state").ACTIVE_DIALOG;
        document.body.style.overflow = "auto";
        // Add the closing class to apply the transition properties
        requireModule("CSSCore").addClass(dialog, classList.closing);

        // Immediately remove the open class to trigger the animation
        requireModule("CSSCore").removeClass(dialog, classList.open);

        // After the transition finishes, remove the closing class
        setTimeout(function() {
            requireModule("CSSCore").removeClass(dialog, classList.closing);
        }, 95); // Match your transition duration (75ms) + a small buffer
        requireModule("components:state").ACTIVE_DIALOG = null;
    }
    
    function getCurrentDisplayedDialog() {
        return requireModule("components:state").ACTIVE_DIALOG;
    }
    
    function handleDialogSlots(button) {

    }

    var eventHandler = {
        handleActionButtonClick: function(button, event) {
            var isPositiveButton = requireModule("CSSCore").hasClass(button, classList.positive_button);
            if (!isPositiveButton) close();

            handleDialogSlots(button);
        }
    };

    var adapter = {
        handleActionButtonClick: eventHandler.handleActionButtonClick,
        open: function() {
            open.call(this);
        },
        close: function() {
            close.call();
        }
    };

    module.exports = adapter;
}), null);

defineModule("Dialog", ["DialogAdapter"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, adapter) {
    'use strict';

    function dialog(id) {
        this._root = requireModule("$").fromIDOrElement(id);
        this.closeOnEscape = false;
        this.timeoutMs = 5000;
    }
    dialog.prototype.open = function() {
        // Pass the current instance 'this' to the adapter's open method.
        adapter.open.call(this);
    };
    dialog.prototype.close = function() {
        // The close function now intelligently closes the currently active snackbar.
        adapter.close();
    };
    dialog.prototype.setCloseOnEscape = function(closeOnEscape) {
        if (typeof closeOnEscape !== "boolean") throw new TypeError("argument 'closeOnEscape' must be a boolean type");
        this.closeOnEscape = closeOnEscape;
        return this;
    };
    dialog.prototype.onClose = function(callback) {
        if (typeof callback !== "function") throw new TypeError("argument 'callback' must be a function");
        this.closeCallback = callback;
        return this;
    };

    module.exports = dialog;
}), null);

defineModule("initComponents", ["EventType"], (function(global, requireModule, requireDynamic, requireLazy, module, exports, eventTypes) {
    'use strict';
    var classList = requireModule("components:classlist");

    function handleChangeEvent(event) {
        var domEvent = new(requireModule("DOMEvent"))(event);
        var target   = domEvent.target;
        var type     = domEvent.type;

        requireModule("JSEventController").handleChangeEvent(event, function() {
            var textfieldInput = requireModule("Parent").byClass(target, classList.textfield.input);
            if (textfieldInput != null) {
                requireModule("TextfieldAdapter").handleChangeEvent(target, domEvent.event);
            }
        });
    }

    function handleFocusEvent(event) {
        var domEvent = new(requireModule("DOMEvent"))(event);
        var target   = domEvent.target;
        var type     = domEvent.type;

        if (type == eventTypes.FOCUSIN) {
            requireModule("JSEventController").handleFocusInEvent(event, function() {
            });
        }

        if (type == eventTypes.FOCUSOUT) {
            requireModule("JSEventController").handleFocusOutEvent(event, function() {
            });
        }

        var tab = requireModule("Parent").byClass(target, classList.tab.container);
        if (tab) {
            requireModule("TabAdapter").handleFocusEvent(target, domEvent.event);
        }

        var textfieldInput = requireModule("Parent").byClass(target, classList.textfield.input);
        if (textfieldInput !== null) {
            requireModule("TextfieldAdapter").handleFocusEvent(target, domEvent.event);
        }
    }

    function handleMouseEvent(event) {
        var domEvent = new(requireModule("DOMEvent"))(event);
        var target   = domEvent.target;
        var type     = domEvent.type;

        if (type == eventTypes.MOUSE.CLICK) {
            requireModule("JSEventController").handleClickEvent(event, function() {
                // Handling dialog
                var scrim = requireModule("Parent").byClass(target, classList.dialog.scrim);
                if (scrim) {
                    if (requireModule("components:state").ACTIVE_DIALOG !== null) {
                        requireModule("DialogAdapter").close();
                    }
                }
                
                // Handling dialog action buttons
                var dialogActionButton = requireModule("Parent").byClass(target, classList.dialog.button);
                if (dialogActionButton) {
                    requireModule("DialogAdapter").handleActionButtonClick(dialogActionButton, domEvent.event);
                }

                // Handling icon buttons
                var iconButton = requireModule("Parent").byClass(target, classList.icon_button.container);
                if (iconButton) {
                    requireModule("IconButtonAdapter").handleClickEvent(iconButton, domEvent.event);
                }

                // Handling list item on navigation drawer or lists
                var listItem = requireModule("Parent").byClass(target, classList.list.item);
                if (listItem) {
                    // Does its parent is a navigation drawer?
                    if (requireModule("Parent").byClass(listItem, classList.navigation_drawer.container)) {
                        requireModule("NavigationDrawerAdapter").handleClickEvent(target, domEvent.event);
                    }
                }

                // Handling snackbar dismiss or action button
                var snackbarrDismissButton = requireModule("Parent").byClass(target, classList.snackbar.dismiss);
                var snackbarActionButton = requireModule("Parent").byClass(target, classList.snackbar.action);
                if (snackbarrDismissButton || snackbarActionButton) {
                    requireModule("SnackbarAdapter").handleClickEvent(snackbarrDismissButton, domEvent.event);
                }

                // Handling switch toggle
                var switchElement = requireModule("Parent").byClass(target, classList.switch.input);
                if (switchElement) {
                    requireModule("SwitchAdapter").handleClickEvent(switchElement, domEvent.event);
                }

                // Handling trailing icons actions, like (clear, password visivility, etc) on textfields
                var textfieldTrailingIcon = requireModule("Parent").byClass(target, classList.textfield.icon_trailing);
                if (textfieldTrailingIcon) {
                    requireModule("TextfieldAdapter").handleTrailingIconAction(textfieldTrailingIcon, domEvent.event);
                    return;
                }

                // Handling tabs
                var tab = requireModule("Parent").byClass(target, classList.tab.container);
                if (tab) {
                    requireModule("TabAdapter").handleClickEvent(tab, domEvent.event);
                    return;
                }
                
                var textfieldInput = requireModule("Parent").byClass(target, classList.textfield.input);
                if (textfieldInput !== null) {
                    requireModule("TextfieldAdapter").handleClickEvent(target, domEvent.event);
                }

                // Handling segmented button
                var segmentedButtonElement = requireModule("Parent").byClass(target, classList.segmented_button.button);
                if (segmentedButtonElement) {
                    requireModule("SegmentedButtonsAdapter").start(domEvent.event, segmentedButtonElement);
                }
            });
        }

        if (type == eventTypes.MOUSE.DBLCLICK) {
            requireModule("JSEventController").handleDblClickEvent(event, function() {
            });
        }

        if (type == eventTypes.MOUSE.MOUSEUP) {
            requireModule("JSEventController").handleMouseUpEvent(event, function() {
            });
        }

        if (type == eventTypes.MOUSE.MOUSEDOWN) {
            requireModule("JSEventController").handleMouseDownEvent(event, function() {
                // Handling ripple effect
                var rippleElement = requireModule("Parent").byClass(target, classList.ripple.ripple);
                if (rippleElement && domEvent.event.button === 0) {
                    requireModule("Ripple").start(domEvent.type, domEvent.event);
                }
            });
        }

        if (type == eventTypes.MOUSE.MOUSEMOVE) {
            requireModule("JSEventController").handleMouseMoveEvent(event, function() {
            });
        }

        if (type == eventTypes.MOUSE.MOUSEOVER) {
            requireModule("JSEventController").handleMouseOverEvent(event, function() {
            });
        }

        if (type == eventTypes.MOUSE.MOUSEOOUT) {
            requireModule("JSEventController").handleMouseOutEvent(event, function() {
            });
        }

        if (type == eventTypes.MOUSE.CONTEXTMENU) {
            requireModule("JSEventController").handleContextMenuEvent(event, function() {
                console.log("Context Menu")
            });
        }

    }

    function handleKeyboardEvent(event) {
        var domEvent = new(requireModule("DOMEvent"))(event);
        var target = domEvent.target;
        var type = domEvent.type;

        if (type == eventTypes.KEYBOARD.KEYDOWN) {
            requireModule("JSEventController").handleKeyboardDown(event, function() {
            });
        }

        if (type == eventTypes.KEYBOARD.KEYUP) {
            requireModule("JSEventController").handleKeyboardUp(event, function() {
            });
        }

        if (type == eventTypes.KEYBOARD.KEYPRESS) {
            requireModule("JSEventController").handleKeyboardPress(event, function() {
            });
        }

        // Handling textfield input
        var textfieldInput = requireModule("Parent").byClass(target, classList.textfield.input);
        if (textfieldInput != null) {
            // Checking if textfield input has pattern attribute, if so add error class to textfield parent
            var textfield = requireModule("Parent").byClass(textfieldInput, classList.textfield.container);
            if (textfield != null) {
                requireModule("TextfieldAdapter").handleKeyboardEvent(target, domEvent.event);
            }
        }

        // Handling window shorcuts
        if (domEvent.event.key === "Escape") {
            // Handle Escape key
            console.log("Escape key pressed");
            // You can add logic to close modals or clear inputs
        } else if (domEvent.event.key === "Enter") {
            // Handle Enter key
            console.log("Enter key pressed");
            // You can add logic to submit forms or trigger actions
        }
    }

    function handleInput(event) {
        var target = event.target;

        var textfieldInput = requireModule("Parent").byClass(target, classList.textfield.input);
        if (textfieldInput !== null) {
            requireModule("TextfieldAdapter").handleInputEvent(target, event);
        }
    }

    function handleTouchEvent(event) {
        var event = new(requireModule("TouchEvent"))(event);

        requireModule("JSEventController").handleTouchEvent(event, function() {
            event.onTap(function(a) {

            });
            event.onSwipe(function(a) {
                //console.log(a);
            });
            event.onSwipeLeft(function(a) {
            });
            event.onSwipeRight(function(a) {
                //console.log("right", a);
            });
            event.onSwipeUp(function(a) {
                //console.log("up")
            });
            event.onSwipeDown(function(a) {
                //console.log("down");
            });

            event.initHandler();
        });
    }

    var eventHandler = {
        handleChange: handleChangeEvent,
        handleFocusEvent: handleFocusEvent,
        handleMouseEvent: handleMouseEvent,
        handleKeyboardEvent: handleKeyboardEvent,
        handleInput: handleInput,
        handleTouchEvent: handleTouchEvent
    };

    function addComponentsListeners() {
        var signal = requireModule("Event").addEventListener;
        signal(document, eventTypes.CHANGE             , eventHandler.handleChange);
        signal(document, eventTypes.FOCUS              , eventHandler.handleFocusEvent);
        signal(document, eventTypes.BLUR               , eventHandler.handleFocusEvent);
        signal(document, eventTypes.FOCUSIN            , eventHandler.handleFocusEvent);
        signal(document, eventTypes.FOCUSOUT           , eventHandler.handleFocusEvent);
        signal(document, eventTypes.MOUSE.CLICK        , eventHandler.handleMouseEvent);
        signal(document, eventTypes.MOUSE.DBLCLICK     , eventHandler.handleMouseEvent);
        signal(document, eventTypes.MOUSE.MOUSEDOWN    , eventHandler.handleMouseEvent);
        signal(document, eventTypes.MOUSE.MOUSEUP      , eventHandler.handleMouseEvent);
        signal(document, eventTypes.MOUSE.CONTEXTMENU  , eventHandler.handleMouseEvent);
        signal(document, eventTypes.TOUCH.TOUCHSTART   , eventHandler.handleTouchEvent , true);
        signal(document, eventTypes.TOUCH.TOUCHMOVE    , eventHandler.handleTouchEvent , true);
        signal(document, eventTypes.TOUCH.TOUCHEND     , eventHandler.handleTouchEvent , true);
        signal(document, eventTypes.TOUCH.TOUCHCANCEL  , eventHandler.handleTouchEvent , true);

        signal(document, eventTypes.KEYBOARD.KEYUP     , eventHandler.handleKeyboardEvent, true);
        signal(document, eventTypes.KEYBOARD.KEYDOWN   , eventHandler.handleKeyboardEvent, true);
        signal(document, eventTypes.KEYBOARD.KEYPRESS  , eventHandler.handleKeyboardEvent, true);
        signal(document, 'input', eventHandler.handleInput, true);

    }

    addComponentsListeners();
}), true);

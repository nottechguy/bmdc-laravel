<?php

namespace BMDC;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;

class BMDCServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bmdc.php', 'bmdc'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {

        Blade::directive('boolattrs', function ($expression) {
            return <<<EOT
        <?php
            [\$__attrs, \$__bools] = is_array({$expression})
                ? {$expression}
                : [{$expression}, ['hidden','disabled','readonly','required','checked','selected','autofocus']];

            \$__boolStr = '';
            foreach (\$__bools as \$__bool) {
                if (\$__attrs->has(\$__bool)) {
                    \$__boolStr .= ' ' . \$__bool;
                    \$__attrs = \$__attrs->except(\$__bool);
                }
            }

            echo trim(\$__attrs->toHtml() . \$__boolStr);
        ?>
        EOT;
        });

        // Load views - fix the path
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bmdc');

        // Publish config
        $this->publishes([
            __DIR__.'/../config/bmdc.php' => config_path('bmdc.php'),
        ], 'bmdc-config');

        // Publish assets
        $this->publishes([
            __DIR__.'/../resources/assets/css' => public_path('vendor/bmdc/css'),
            __DIR__.'/../resources/assets/js' => public_path('vendor/bmdc/js'),
        ], 'bmdc-assets');

        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bmdc'),
        ], 'bmdc-views');

        // Register components
        $this->registerComponents();
    }

    /**
     * Register components.
     *
     * @return void
     */
    protected function registerComponents() {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            $prefix = 'bmdc';
            
            \Illuminate\Support\Facades\Blade::componentNamespace('BMDC\\Components', $prefix);

            $components = [
                'icon'              => \BMDC\Components\action\BMDCIcon::class, 
                'ripple'            => \BMDC\Components\action\BMDCRipple::class,
                'button'            => \BMDC\Components\action\BMDCButton::class,
                'icon-button'       => \BMDC\Components\action\BMDCIconButton::class,
                'chip-set'          => \BMDC\Components\action\BMDCChipset::class,
                'chip'              => \BMDC\Components\action\BMDCChip::class,
                'checkbox'          => \BMDC\Components\selection\BMDCCheckbox::class,
                'radio-button'      => \BMDC\Components\selection\BMDCRadioButton::class,
                'switch'            => \BMDC\Components\selection\BMDCSwitch::class,
                'fab'               => \BMDC\Components\action\BMDCFab::class,
                'badge'             => \BMDC\Components\communication\BMDCBadge::class,
                'dialog'            => \BMDC\Components\communication\BMDCDialog::class,
                'snackbar'          => \BMDC\Components\communication\BMDCSnackbar::class,
                'card'              => \BMDC\Components\containment\BMDCCard::class,
                'image-list'        => \BMDC\Components\containment\BMDCImageList::class,
                'image-list-item'   => \BMDC\Components\containment\BMDCImageListItem::class,
                'list-group'        => \BMDC\Components\containment\BMDCListGroup::class,
                'list'              => \BMDC\Components\containment\BMDCList::class,
                'list-item'         => \BMDC\Components\containment\BMDCListItem::class,
                'list-divider'      => \BMDC\Components\containment\BMDCListDivider::class,
                'form-field'        => \BMDC\Components\textinput\BMDCFormField::class,
                'textfield'         => \BMDC\Components\textinput\BMDCTextfield::class,
                'select'            => \BMDC\Components\textinput\BMDCSelect::class,
                'select-option'     => \BMDC\Components\textinput\BMDCSelectOption::class,
                'top-app-bar'       => \BMDC\Components\navigation\BMDCTopAppBar::class,
                'top-app-bar-action'=> \BMDC\Components\navigation\BMDCTopAppBarAction::class,
                'drawer'            => \BMDC\Components\navigation\BMDCDrawer::class,
                'drawer-item'       => \BMDC\Components\navigation\BMDCDrawerItem::class,
                'menu'              => \BMDC\Components\navigation\BMDCMenu::class,
                'menu-anchor'       => \BMDC\Components\navigation\BMDCMenuAnchor::class,
                'tabs'              => \BMDC\Components\navigation\BMDCTabs::class,
                'tab'               => \BMDC\Components\navigation\BMDCTab::class,
            ];

            foreach ($components as $alias => $component) {
                Blade::component($component, $alias, $prefix);
            }
            
            $anonymous_components = [
                // alias => view path (relative to your 'views' folder)
                'drawer-frame-root'     => 'components.navigation.drawer.drawer-frame-root',
                'drawer-frame-content'  => 'components.navigation.drawer.drawer-frame-content',
                'drawer-main-content'   => 'components.navigation.drawer.drawer-main-content',
                'progress-indicator'    => 'components.communication.progress-indicator.linear',
                'card-divider'          => 'components.containment.card.card-divider',
                'card-actions'          => 'components.containment.card.card-actions',
                'card-button'           => 'components.containment.card.card-button',
                'card-icon'             => 'components.containment.card.card-icon',
                'drawer-subheader'      => 'components.navigation.drawer.drawer-subheader',
                'tab-pane'              => 'components.navigation.tabs.tab-pane'
            ];
            
            foreach ($anonymous_components as $alias => $view) {
                // The view name uses the 'bmdc::' namespace you registered
                Blade::component("bmdc::{$view}", $alias, $prefix);
            }
        });
    }
}

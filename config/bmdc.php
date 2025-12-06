<?php

return [
    /*
    |--------------------------------------------------------------------------
    | BMDC Theme Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can customize the default theme configuration for the Blade
    | Material Design Components. Adjust colors, spacing, and other 
    | visual properties to match your application's design.
    |
    */

    'theme' => [
        // Primary colors
        'primary' => '#6200ee',
        'primary-variant' => '#3700b3',
        'on-primary' => '#ffffff',
        
        // Secondary colors
        'secondary' => '#03dac6',
        'secondary-variant' => '#018786',
        'on-secondary' => '#000000',
        
        // Background colors
        'background' => '#ffffff',
        'on-background' => '#000000',
        
        // Surface colors
        'surface' => '#ffffff',
        'on-surface' => '#000000',
        
        // Error colors
        'error' => '#b00020',
        'on-error' => '#ffffff',
        
        // State colors
        'disabled' => 'rgba(0, 0, 0, 0.38)',
        'disabled-background' => 'rgba(0, 0, 0, 0.12)',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Component Properties
    |--------------------------------------------------------------------------
    |
    | Here you can define default properties for each component.
    | These will be used when not explicitly specified during usage.
    |
    */

    'defaults' => [
        'button' => [
            'variant' => 'filled',
            'size' => 'medium',
        ],
        'input' => [
            'variant' => 'outlined',
        ],
        'card' => [
            'variant' => 'filled',
            'elevated' => true,
        ],
        'checkbox' => [
            'color' => 'primary',
        ],
        'dialog' => [
            'size' => 'medium',
            'scroll' => 'paper',
        ],
        'select' => [
            'variant' => 'outlined',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Class Prefix
    |--------------------------------------------------------------------------
    |
    | This value will be used as the prefix for all CSS classes in the components
    | to avoid conflicts with other frameworks or your own styles.
    |
    */

    'class_prefix' => 'c_',

    /*
    |--------------------------------------------------------------------------
    | Asset Publishing
    |--------------------------------------------------------------------------
    |
    | Configure the assets that should be published when running the
    | vendor:publish command with the package's service provider.
    |
    */

    'assets' => [
        'publish_css' => true,
        'publish_js' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Typography
    |--------------------------------------------------------------------------
    |
    | Configure the default font family and sizes for consistent 
    | typography across components.
    |
    */

    'typography' => [
        'font-family' => "'Roboto', sans-serif",
        'headings' => [
            'h1' => [
                'font-size' => '2.5rem',
                'font-weight' => '300',
                'line-height' => '1.2',
            ],
            'h2' => [
                'font-size' => '2rem',
                'font-weight' => '300',
                'line-height' => '1.2',
            ],
            'h3' => [
                'font-size' => '1.75rem',
                'font-weight' => '400',
                'line-height' => '1.2',
            ],
            'h4' => [
                'font-size' => '1.5rem',
                'font-weight' => '400',
                'line-height' => '1.2',
            ],
            'h5' => [
                'font-size' => '1.25rem',
                'font-weight' => '400',
                'line-height' => '1.2',
            ],
            'h6' => [
                'font-size' => '1rem',
                'font-weight' => '500',
                'line-height' => '1.2',
            ],
        ],
        'body' => [
            'font-size' => '1rem',
            'font-weight' => '400',
            'line-height' => '1.5',
        ],
        'caption' => [
            'font-size' => '0.75rem',
            'font-weight' => '400',
            'line-height' => '1.25',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Animation
    |--------------------------------------------------------------------------
    |
    | Configure the default animation duration and timing function
    | for interactive components.
    |
    */

    'animation' => [
        'duration' => '200ms',
        'timing-function' => 'cubic-bezier(0.4, 0, 0.2, 1)',
    ],

    /*
    |--------------------------------------------------------------------------
    | Shape
    |--------------------------------------------------------------------------
    |
    | Configure the default border radius values for components.
    |
    */

    'shape' => [
        'small' => '4px',
        'medium' => '8px',
        'large' => '16px',
    ],
];
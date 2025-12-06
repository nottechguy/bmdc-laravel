# BMDC - Blade Material Design Components

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D8.0-8892BF.svg)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/laravel-supported-red.svg)](https://laravel.com/)

BMDC (Blade Material Design Components) is a package of Laravel Blade components based on Material Design principles. It provides a set of reusable, accessible components that follow Material Design guidelines, built specifically for Laravel applications.

## Features

- Modern Material Design components for Laravel Blade
- No external dependencies (No Tailwind or other CSS frameworks required)
- PHP 8.0+ support
- Easy to integrate and customize
- Responsive and accessible

## Requirements

- PHP 8.0 or higher
- Laravel 8.0 or higher

## Installation

You can install the package via composer:

```bash
composer require nottechguy/bmdc
```

After installation, publish the assets:

```bash
php artisan vendor:publish --provider="BMDC\BMDCServiceProvider" --tag="bmdc-assets"
```

Optionally, you can publish the config file:

```bash
php artisan vendor:publish --provider="BMDC\BMDCServiceProvider" --tag="bmdc-config"
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

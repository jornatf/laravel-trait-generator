# Laravel Trait Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jornatf/laravel-trait-generator.svg?style=flat-square)](https://packagist.org/packages/jornatf/laravel-trait-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jornatf/laravel-trait-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jornatf/laravel-trait-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jornatf/laravel-trait-generator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jornatf/laravel-trait-generator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jornatf/laravel-trait-generator.svg?style=flat-square)](https://packagist.org/packages/jornatf/laravel-trait-generator)

A Laravel Package to make Trait with [artisan CLI](https://laravel.com/docs/master/artisan).

> #### If you like this package you can [Buy me a Coffee](https://www.buymeacoffee.com/jornatf) ☕️

## Installation

### Via composer:

```bash
composer require jornatf/laravel-trait-generator
```

## Usage

### Via artisan CLI:

```bash
php artisan make:trait Foo
```

The trait namespace is: `App\Traits`.

### Trait generated (example):

```php
<?php

namespace App\Traits;

trait Foo
{
    /**
     * Method description.
     *
     * @return string
     */
    public function methodName()
    {
        return "Hello World";
    }
}
```

## Testing

```bash
composer test
```

## Changelog

> Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

> Feel free to contribute to this project to improve with new features or fix bugs 👍

## Credits

-   [Jordan](https://github.com/jornatf)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT).

> Please see [License File](LICENSE.md) for more information.

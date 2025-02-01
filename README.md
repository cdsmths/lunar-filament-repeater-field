#

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cdsmths/lunar-filament-repeater-field.svg?style=flat-square)](https://packagist.org/packages/cdsmths/lunar-filament-repeater-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/cdsmths/lunar-filament-repeater-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/cdsmths/lunar-filament-repeater-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/cdsmths/lunar-filament-repeater-field/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/cdsmths/lunar-filament-repeater-field/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cdsmths/lunar-filament-repeater-field.svg?style=flat-square)](https://packagist.org/packages/cdsmths/lunar-filament-repeater-field)

This is a Laravel package that provides a repeater field for the Filament admin panel. This a field that allows you to add multiple instances of a group of fields. This is useful for creating a list of items that have the same fields.

> **Note:** This package is still in development and is not yet ready for production use.

## Installation

You can install the package via composer:

```bash
composer require cdsmths/lunar-filament-repeater-field
```

## Usage

Register the field in your AppServiceProvider like so in the register method:

```php
AttributeData::registerFieldType(RepeaterField::class, RepeaterFieldType::class);
```

Then you can add the field under Settings > Attribute Groups > Fields in your Lunar admin panel. Don't forget to add the the field to your producttype otherwise it won't show up on the product edit page.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Thomas van der Westen](https://github.com/tdwesten)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

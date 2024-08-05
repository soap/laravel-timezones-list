# Time zone list and helpers for Laravel application

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soap/laravel-timezones-list.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-timezones-list)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-timezones-list/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/soap/laravel-timezones-list/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/soap/laravel-timezones-list/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/soap/laravel-timezones-list/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soap/laravel-timezones-list.svg?style=flat-square)](https://packagist.org/packages/soap/laravel-timezones-list)

Timezones Helper for Laravel application. It may be used to create Select List input options. This package is based on [baspa/laravel-timezones](https://github.com/Baspa/laravel-timezones). I modified the package to use with [WhiteCute 's laravel-timezones](https://github.com/whitecube/laravel-timezones) which support datetime casting into user timezone.

## Installation

You can install the package via composer:

```bash
composer require soap/laravel-timezones-list
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-timezones-list-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage
### Timezones grouped by continent

```
use Soap\TimezonesList\Facades\TimezonesList;
// 
$groupedTimezones = TimezonesList::toArray(grouped: true);
```

### All timezones

```
use Soap\TimezonesList\Facades\TimezonesList;
// 
$timezones = TimezonesList::toArray();
```

### Exclude continents

```
use Soap\TimezonesList\Facades\TimezonesList;
// 
$timezones = TimezonesList::excludeContinents(['Africa', 'America'])
    ->toArray();
```

### Show offset

```
$timezones = TimezonesList::showOffset()->toArray();
// or
$timezones = TimezonesList::showOffset(showOffset: false)->toArray();
```

### Include general timezones

To include general timezones like GMT or UTC use the includeGeneral method.
```
$timezones = TimezonesList::includeGeneral()->toArray();
```

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

- [Prasit Gebsaap](https://github.com/soap)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

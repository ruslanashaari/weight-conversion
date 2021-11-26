# Weight Conversion in PHP

Note: This is my 1st attempt in building a php package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lanash/weight-conversion.svg?style=flat-square)](https://packagist.org/packages/lanash/weight-conversion)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lanash/weight-conversion/run-tests?label=tests)](https://github.com/lanash/weight-conversion/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lanash/weight-conversion/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lanash/weight-conversion/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lanash/weight-conversion.svg?style=flat-square)](https://packagist.org/packages/lanash/weight-conversion)

---

Do a weight conversion package for PHP projects


## Installation

You can install the package via composer:

```bash
composer require lanash/weight-conversion
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="weight-conversion_without_prefix-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="weight-conversion_without_prefix-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="example-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$weight-conversion = new Lanash\WeightConversion();
echo $weight-conversion->echoPhrase('Hello, Lanash!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ruslanashaari](https://github.com/ruslanashaari)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

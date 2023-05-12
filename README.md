# Census result dissemination kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/uneca/dissemination-kit.svg?style=flat-square)](https://packagist.org/packages/uneca/dissemination-kit)
[![Total Downloads](https://img.shields.io/packagist/dt/uneca/dissemination-kit.svg?style=flat-square)](https://packagist.org/packages/uneca/dissemination-kit)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require uneca/dissemination-kit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="dissemination-kit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dissemination-kit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="dissemination-kit-views"
```

## Usage

```php
$dissemination = new Uneca\Dissemination();
echo $dissemination->echoPhrase('Hello, Uneca!');
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

- [UNECA](https://github.com/amestsantim)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

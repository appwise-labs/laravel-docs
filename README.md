# Laravel docs package

## Introduction

## Installation

Require the package with Composer:

```sh
composer require appwise-labs/laravel-docs
```

**This packages uses Laravel's autodiscovery**:

If this doesn't work correctly for some reason, you can manually add the ServiceProvider to your `config/app.php`.

```php
'providers' => [
    //...
    AppwiseLabs\LaravelDocs\LaravelDocsServiceProvider::class
];
```

Finally, publish the default config file `config/laravel-docs.php` using

```
php artisan laravel-docs:install
``` 
or 
```
php artisan vendor:publish --provider="AppwiseLabs\LaravelDocs\LaravelDocsServiceProvider" --tag="config"
```

## Usage

### Basic usage
Put your openapi.yaml file in `resources/docs/openapi.yaml` and run
This path can be changed using the `config/laravel-docs.php` config file.
The default route to view your docs is `/docs`.

### Gate
By default, the docs are only accessible in the local environment.
You can change this by using the gate `canViewDocs` in your `App\Providers\AuthServiceProvider` file.
For example:
```php
Gate::define('canViewDocs', function ($user = null) {
    return true;
});
```

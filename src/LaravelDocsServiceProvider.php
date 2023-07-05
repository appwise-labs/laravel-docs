<?php

namespace AppwiseLabs\LaravelDocs;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use AppwiseLabs\LaravelDocs\Console\InstallCommand;
use AppwiseLabs\LaravelDocs\Http\Controllers\DocsController;
use AppwiseLabs\LaravelDocs\Http\Middleware\CanViewDocs;

class LaravelDocsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/config/laravel-docs.php' => config_path('laravel-docs.php'),
            ], 'laravel-docs-config');
        }

        $this->loadRoutes();
        $this->loadViews();
    }

    public function register() {
        $this->mergeConfigFrom(__DIR__ . '/config/laravel-docs.php', 'laravel-docs');

        $this->commands([InstallCommand::class]);
    }


    protected function loadRoutes() {
        $middleware = config('laravel-docs.middleware', [
            ////'web',
            //CanViewDocs::class
        ]);

        Route::middleware($middleware)
            ->prefix(config('laravel-docs.path'))
            ->group(function () {
                Route::view('/', 'laravel-docs::index')->name('laravel-docs');

                Route::get('openapi', [DocsController::class, 'json'])
                    ->name('laravel-docs-root');

                Route::get('{path?}', [DocsController::class, 'any'])
                    ->where('path', '(.*)')
                    ->name('laravel-docs-any');
            });
    }

    protected function loadViews() {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'laravel-docs');
    }
}

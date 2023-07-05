<?php

namespace AppwiseLabs\LaravelDocs\Console;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    protected $signature = 'laravel-docs:install';

    protected $description = 'publish laravel-docs config file';

    public function handle() : void
    {
        $this->comment('Publish Laravel Docs config fiel...');
        $this->call('vendor:publish', ['--tag' => 'laravel-docs-config']);
    }
}

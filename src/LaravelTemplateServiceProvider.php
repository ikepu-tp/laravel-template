<?php

namespace ikepu_tp\LaravelTemplate;

use ikepu_tp\LaravelTemplate\app\Commands\ExceptionCommand;
use ikepu_tp\LaravelTemplate\app\Commands\ResourceCommand;
use Illuminate\Support\ServiceProvider;

class LaravelTemplateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (!$this->app->runningInConsole()) return;
        $this->commands([
            ExceptionCommand::class,
            ResourceCommand::class,
        ]);
    }
}

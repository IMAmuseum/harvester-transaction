<?php

namespace Imamuseum\HarvesterTransaction;

use Illuminate\Support\ServiceProvider;

class HarvesterTransactionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load routes
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/Http/routes.php';
        }

        $this->publishes([
            __DIR__.'/../config/harvester-transaction.php' => config_path('harvester-transaction.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            'Imamuseum\HarvesterTransaction\Console\Commands\HarvestExportCommand'
        ]);
    }
}

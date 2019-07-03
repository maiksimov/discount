<?php

namespace Maiksimov\Discount;

use Illuminate\Support\ServiceProvider;

class DiscountServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../../config/config.php' => config_path('discount.php')
        ]);

        if ($this->app->runningInConsole()) {
            $this->registerMigrations();
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'passport-migrations');
//            $this->publishes([
//                __DIR__.'/../resources/views' => base_path('resources/views/vendor/passport'),
//            ], 'passport-views');
//            $this->publishes([
//                __DIR__.'/../resources/js/components' => base_path('resources/js/components/passport'),
//            ], 'passport-components');
//            $this->commands([
//                Console\InstallCommand::class,
//                Console\ClientCommand::class,
//                Console\KeysCommand::class,
//            ]);
        }
    }

    protected function registerMigrations()
    {
        return $this->loadMigrationsFrom(__DIR__.'/../../../database/migrations');
    }

    public function register()
    {
        $app = $this->app;

        $this->mergeConfigFrom(
            __DIR__.'/../../../config/config.php',
            'discount'
        );
    }
}
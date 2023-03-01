<?php

namespace Hafijul233\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../config/generator.php' => config_path('generator.php')]);

//        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'form');

//        $this->publishes([
//            __DIR__ . '/../lang' => $this->app->langPath('vendor/form'),
//        ]);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'generator');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/generator'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/generator'),
        ], 'public');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            /*            $this->commands([
                            FormCommand::class
                        ]);*/
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/generator.php', 'generator'
        );
    }
}

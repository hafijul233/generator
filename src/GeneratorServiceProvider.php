<?php

namespace Hafijul233\Generator;

use Hafijul233\Generator\Commands\GeneratorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('generator')
            ->hasConfigFile('generator')
            ->hasViews('generator')
            ->hasRoute('web');
/*            ->hasMigration('create_generator_table')
            ->hasCommand(GeneratorCommand::class);*/
    }
}

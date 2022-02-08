<?php

namespace ThrelsLtd\LaravelSequentialIdentifier;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ThrelsLtd\LaravelSequentialIdentifier\Commands\LaravelSequentialIdentifierCommand;

class LaravelSequentialIdentifierServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sequential-identifier')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-sequential-identifier_table')
            ->hasCommand(LaravelSequentialIdentifierCommand::class);
    }
}

<?php

namespace Uneca\Dissemination;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Uneca\Dissemination\Commands\DisseminationCommand;

class DisseminationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dissemination-kit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dissemination-kit_table')
            ->hasCommand(DisseminationCommand::class);
    }
}

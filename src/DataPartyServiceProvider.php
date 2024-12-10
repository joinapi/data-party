<?php

use Joinbiz\Data\Models\Party\Commands\DataPartyCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DataPartyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('data-party')
            ->hasConfigFile()
            ->hasCommand(DataPartyCommand::class);
    }
}

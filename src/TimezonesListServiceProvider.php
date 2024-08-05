<?php

namespace Soap\TimezonesList;

use Soap\TimezonesList\Commands\TimezonesListCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TimezonesListServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-timezones-list')
            ->hasConfigFile()
            ->hasCommand(TimezonesListCommand::class);
    }
}

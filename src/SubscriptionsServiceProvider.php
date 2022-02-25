<?php

namespace SANMV\Subscriptions;

use SANMV\Subscriptions\Commands\SubscriptionsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SubscriptionsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-subscriptions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-subscriptions_table')
            ->hasCommand(SubscriptionsCommand::class);
    }
}

<?php

namespace Jornatf\LaravelTraitGenerator;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Jornatf\LaravelTraitGenerator\Commands\MakeTraitCommand;

class TraitGeneratorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('trait-generator')
            ->hasCommand(MakeTraitCommand::class);
    }
}

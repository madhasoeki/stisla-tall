<?php

namespace Stisla\TALL;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Stisla\TALL\Commands\StislaInstallCommand;

class StislaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                StislaInstallCommand::class,
            ]);
        }

        $componentsPath = is_dir(resource_path('views/components/stisla'))
            ? resource_path('views/components/stisla')
            : __DIR__.'/../resources/views/components/stisla';

        Blade::anonymousComponentPath($componentsPath, 'stisla');

        if (is_dir(resource_path('views/showcase'))) {
            Blade::anonymousComponentPath(resource_path('views/showcase'), 'showcase');
        }

        Blade::extend(function (string $value, $compiler): string {
            $value = preg_replace('/<(\/)?stisla::/', '<$1x-stisla::', $value);

            return (new \Illuminate\View\Compilers\ComponentTagCompiler(
                $compiler->getClassComponentAliases(),
                $compiler->getCustomDirectives(),
                $compiler
            ))->compile($value);
        });
    }
}

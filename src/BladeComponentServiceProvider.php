<?php

namespace THEPany\BladeComponents;

use Illuminate\Support\ServiceProvider;
use THEPany\BladeComponents\Blade\{Components, Directives, Includes};

class BladeComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blade-components');

        $this->registerComponenets();

        if ($this->app->runningInConsole()) {
            $this->publishAssets();
        }
    }

    protected function registerComponenets()
    {
        Components::make()->register();
        Directives::make()->register();
        Includes::make()->register();
    }

    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/blade-components'),
        ], 'blade-component-view');

        $this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/blade-components'),
        ], 'blade-component-asset');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
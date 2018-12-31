<?php

namespace THEPany\BladeComponents;

use Illuminate\Support\Facades\View;
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
        $this->registerComponenets();
        $this->registerPublishing();

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'blade-components');
    }

    protected function registerComponenets()
    {
        Components::make()->register();
        Directives::make()->register();
        Includes::make()->register();
    }

    protected function registerPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/blade-components'),
            ], 'blade-component-view');

            $this->publishes([
                __DIR__.'/../public' => public_path('vendor'),
            ], 'blade-component-asset');
        }
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
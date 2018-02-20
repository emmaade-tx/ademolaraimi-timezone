<?php

namespace Ademolaraimi\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/ademolaraimi/timezones'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        include __DIR__.'/routes.php';
        $this->app->make('Ademolaraimi\Timezones\TimezonesController');
    }
}

<?php

namespace Cimons\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    public function __construct()
    {

    }
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/cimons/timezones'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        echo '<pre>';
        var_dump('here');
        echo '</pre>';
        die;
        include __DIR__.'/routes/web.php';
        $this->app->make('Cimons\Timezones\TimezonesController');
    }
}

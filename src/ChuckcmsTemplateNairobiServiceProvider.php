<?php

namespace Chuckbe\ChuckcmsTemplateNairobi;

use Illuminate\Support\ServiceProvider;

class ChuckcmsTemplateNairobiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        
        //php artisan vendor:publish --tag=chuckcms-template-nairobi-public --force
        $this->publishes([
            __DIR__.'/resources' => public_path('chuckbe/chuckcms-template-nairobi'),
        ], 'chuckcms-template-nairobi-public');

        // $this->publishes([
        //     __DIR__ . '/config/chuckcms-template-nairobi.php' => config_path('chuckcms-template-nairobi'),
        // ], 'chuckcms-template-nairobi-config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-template-nairobi');

        // $this->mergeConfigFrom(
        //     __DIR__ . '/config/chuckcms-template-nairobi.php', 'chuckcms-template-nairobi-config'
        // );
    }
}

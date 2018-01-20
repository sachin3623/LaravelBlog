<?php

namespace manishsahani999\cms;

use Illuminate\Support\ServiceProvider;

class cmsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->routeAreCached()){
            require __DIR__./routes.php;

        }
        $this->loadViewFrom(base_path('resources/vies'), 'cms');
        $this->publishes([
            __DIR__./views => base_path('resources/view')
        ]);
        $this->publishes([
            __DIR__./migrations => base_path('migrations') 
        ], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
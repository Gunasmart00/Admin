<?php

namespace Gunaseelan\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
                include __DIR__.'/routes/web.php';
     
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/views/','admin');
        $this->mergeConfigFrom(__DIR__.'/config/Adminconfig.php','admin');
        $this->publishes([
            __DIR__.'/config/Adminconfig.php'=>config_path('Adminconfig.php')
        ]);
    }
}

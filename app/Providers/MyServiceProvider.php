<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app() -> singleton('App\Myclasses\MyServiceInterface',
        'App\MyClasses\PowerMyService');
        echo "<br><MyServiceProvider/register></b><br>";
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        echo "<br><MyServiceProvider/bootr></b><br>";
    }
}

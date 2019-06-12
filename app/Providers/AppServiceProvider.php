<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Ref;

use App\Observers\RefObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
       Ref::observe( new RefObserver );
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

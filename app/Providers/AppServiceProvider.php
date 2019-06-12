<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Router;

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

       Route::bind( 'refs', function( $value ) {

            return Ref::where( 'slug', $value )->firstOrFail();

       });

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

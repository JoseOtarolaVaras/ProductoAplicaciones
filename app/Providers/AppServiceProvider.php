<?php

namespace App\Providers;
<<<<<<< HEAD

=======
use Illuminate\Support\Facades\Route;
>>>>>>> 33e86e7 (first commit)
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
=======

    public function register()
    {
    }

    public function boot()
    {
        \Route::resourceVerbs([
            'create'=>'crear',
            'edit'=>'editar',

        ]);
    }
}
>>>>>>> 33e86e7 (first commit)

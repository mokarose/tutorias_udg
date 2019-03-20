<?php

namespace App\Providers;

use App\Convocatory;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //NEW: Import Schema

class AppServiceProvider extends ServiceProvider
{
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
        Schema::defaultStringLength(191);
        view()->composer('auth.register_tutor', function($view) {
            $view->with('convocatory', Convocatory::showActive());
        });

        view()->composer('layouts.app', function($view) {
            $view->with('convocatory', Convocatory::showActive());
        });
    }
}
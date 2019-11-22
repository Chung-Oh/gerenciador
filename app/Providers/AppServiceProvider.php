<?php

namespace App\Providers;

/**
 * Importing the Blade class to rename components when using
 */
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('components.table', 'Table');
        Blade::component('components.btn-go-top', 'ButtonGoTop');
        Blade::component('components.primary-form', 'PrimaryForm');
        Blade::component('components.loading', 'Loading');
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

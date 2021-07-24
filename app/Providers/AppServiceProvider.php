<?php

namespace App\Providers;

use App\View\Components\admin\Datatable;
use App\View\Components\admin\Header;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('header', Header::class);
        Blade::component('datatable', Datatable::class);
    }
}

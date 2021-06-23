<?php

namespace App\Providers;

use App\View\Menu;
use App\View\Modal;
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
        Blade::component(Menu::class, 'menu');
        Blade::component(Modal::class, 'modal');
    }
}

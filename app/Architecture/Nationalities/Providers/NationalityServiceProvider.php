<?php

namespace App\Architecture\Nationalities\Providers;

use App\Architecture\Nationalities\Interfaces\INationalityRepository;
use App\Architecture\Nationalities\Interfaces\INationalityService;
use App\Architecture\Nationalities\Repositories\NationalityRepository;
use App\Architecture\Nationalities\Services\NationalityService;
use Illuminate\Support\ServiceProvider;

class NationalityServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            INationalityRepository::class,
            NationalityRepository::class
        );

        $this->app->singleton(
            INationalityService::class,
            NationalityService::class
        );
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

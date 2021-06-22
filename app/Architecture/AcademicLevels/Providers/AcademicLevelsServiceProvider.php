<?php

namespace App\Architecture\AcademicLevels\Providers;

use App\Architecture\AcademicLevels\Interfaces\IAcademicLevelsRepository;
use App\Architecture\AcademicLevels\Interfaces\IAcademicLevelsService;
use App\Architecture\AcademicLevels\Repositories\AcademicLevelsRepository;
use App\Architecture\AcademicLevels\Services\AcademicLevelsService;
use Illuminate\Support\ServiceProvider;

class AcademicLevelsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            IAcademicLevelsRepository::class,
            AcademicLevelsRepository::class
        );

        $this->app->singleton(
            IAcademicLevelsService::class,
            AcademicLevelsService::class
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

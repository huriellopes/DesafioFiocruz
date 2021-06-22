<?php

namespace App\Architecture\States\Providers;

use App\Architecture\States\Interfaces\IStateRepository;
use App\Architecture\States\Interfaces\IStateService;
use App\Architecture\States\Repositories\StateRepository;
use App\Architecture\States\Services\StateService;
use Illuminate\Support\ServiceProvider;

class StateServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            IStateRepository::class,
            StateRepository::class
        );

        $this->app->singleton(
            IStateService::class,
            StateService::class
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

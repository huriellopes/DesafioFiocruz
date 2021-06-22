<?php

namespace App\Architecture\People\Providers;

use App\Architecture\People\Interfaces\IPeopleRepository;
use App\Architecture\People\Interfaces\IPeopleService;
use App\Architecture\People\Repositories\PeopleRepository;
use App\Architecture\People\Services\PeopleService;
use App\Rules\Cpf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class PeopleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            IPeopleRepository::class,
            PeopleRepository::class
        );

        $this->app->singleton(
            IPeopleService::class,
            PeopleService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('validacpf', 'App\Rules\Cpf@passes', 'O cpf informado é inválido.');
    }
}

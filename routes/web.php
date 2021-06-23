<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PeopleController;
use App\Http\Controllers\Api\PeopleController as PeopleApiController;
use App\Http\Controllers\Api\StateController;
use App\Http\Controllers\Api\CpfController;

// Redireciona a página para a rota people
Route::get('/', function () {
    return redirect()->to('people');
});

// Rotas do sistema
Route::prefix('/')->group(function () {
    Route::resource('people', PeopleController::class)
        ->except(['update', 'show', 'store', 'destroy', 'edit']);

    // Rotas de api
    Route::prefix('/api')->group(function () {
        Route::resource('people_api', PeopleApiController::class)
            ->except(['create', 'edit', 'update', 'destroy', 'edit'])->parameters([
                'people_api' => 'people'
            ]);

        Route::resource('states', StateController::class)
            ->except(['index', 'create', 'show', 'update', 'destroy', 'edit']);

        Route::resource('cpf', CpfController::class)
            ->except(['index', 'create', 'show', 'update', 'destroy', 'edit']);
    });
});

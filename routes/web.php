<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\PeopleController;
use App\Http\Controllers\Api\PeopleController as PeopleApiController;
use App\Http\Controllers\Api\StateController;

// Redireciona a página para a rota people
Route::get('/', function () {
    return redirect()->to('people');
});

Route::prefix('/')->group(function () {
    Route::resource('people', PeopleController::class)
        ->except(['update', 'destroy', 'edit']);

    // Rotas de api
    Route::prefix('/api')->group(function () {
        Route::resource('people_api', PeopleApiController::class)
            ->except(['create', 'show', 'edit', 'update', 'destroy', 'edit']);

        Route::resource('states', StateController::class)
            ->except(['index', 'create', 'show', 'update', 'destroy', 'edit']);
    });
});

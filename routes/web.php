<?php

use Hafijul233\Generator\Controllers\GeneratorController;
use Illuminate\Support\Facades\Route;

Route::prefix('crud')
    ->middleware('web')
    ->group(function () {
        Route::resource('generators', GeneratorController::class);
    });

<?php

use Hafijul233\Generator\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::prefix('generator')->middleware('web')->group(function () {
    Route::get('/crud', CrudController::class)->name('generator.crud');
});

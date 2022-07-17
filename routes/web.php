<?php

use Hafijul233\Generator\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::prefix('generator')->group(function () {
    Route::get('/crud', CrudController::class)->name('generator.crud');
});

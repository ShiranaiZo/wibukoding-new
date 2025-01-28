<?php

use App\Http\Controllers\Be\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Route::controller(AppointmentController::class)
//     ->as('appointment.')
//     ->prefix('appointment')
//     ->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::post('/', 'store')->name('store');
//     });

// Route::get('/', [DashboardController::class, 'index'])->name('learning-path-categories');

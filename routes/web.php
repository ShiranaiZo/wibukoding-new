<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Exampl. You can change this with your own route
    Route::get('/', function () {
            abort(503);
        })
        ->name('home');

    Route::get('/alur-belajar', [MenuController::class, 'learningPath'])
        ->name('learning-path');

    Route::get('/artikel', function () {
            abort(503);
        })->name('article');

    Route::get('/forum', function () {
            abort(503);
        })
        ->name('forum');

    Route::get('/masuk', function () {
            abort(503);
        })
        ->name('login');

    Route::get('/daftar', function () {
            abort(503);
        })
        ->name('register');

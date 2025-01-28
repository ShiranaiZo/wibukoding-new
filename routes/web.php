<?php
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
            return view('fe.pages.home');
        })
        ->name('home');

    Route::get('/alur-belajar', function () {
            return view('fe.pages.home');
        })->name('learning-path');

    Route::get('/artikel', function () {
            return view('fe.pages.home');
        })->name('article');

    Route::get('/forum', function () {
            return view('fe.pages.home');
        })
        ->name('forum');

    Route::get('/masuk', function () {
            return view('fe.pages.home');
        })
        ->name('login');

    Route::get('/daftar', function () {
            return view('fe.pages.home');
        })
        ->name('register');

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

    Route::get('/about', function () {
            return view('fe.pages.home');
        })->name('about');

    Route::get('/article', function () {
            return view('fe.pages.home');
        })->name('article');

    Route::get('/service', function () {
            return view('fe.pages.home');
        })
        ->name('service');

    Route::get('/contact', function () {
            return view('fe.pages.home');
        })
        ->name('contact');

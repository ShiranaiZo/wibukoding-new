<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class InitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function($view) {
            // url => menu namea
            // Don't add more than 1 dropdown!!!
            $data['menuItems'] = [
                [
                    'url' => route('home'),
                    'name' => 'Home',
                ],
                [
                    'url' => route('learning-path'),
                    'name' => 'Alur Belajar',
                ],
                [
                    'url' => route('article'),
                    'name' => 'Artikel',
                ],
                [
                    'url' => route('forum'),
                    'name' => 'Forum',
                ],
            ];

            $view->with($data);
        });
    }
}

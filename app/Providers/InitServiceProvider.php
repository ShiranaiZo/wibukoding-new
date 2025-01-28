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
                    'url' => route('about'),
                    'name' => 'About',
                ],
                [
                    'url' => route('article'),
                    'name' => 'Article',
                ],
                [
                    'url' => route('service'),
                    'name' => 'Service',
                ],
                [
                    'url' => route('contact'),
                    'name' => 'Contact',
                ],
            ];

            $view->with($data);
        });
    }
}

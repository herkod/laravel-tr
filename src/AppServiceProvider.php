<?php

namespace Herkod;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang/' => base_path('lang')
        ], 'herkod-laravel-tr');
    }
}

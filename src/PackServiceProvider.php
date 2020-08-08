<?php

namespace Milk\Hello;

use Illuminate\Support\ServiceProvider;

class PackServiceProvider extends ServiceProvider
{
    public function boot()
    { }

    // 註冊套件函式
    public function register()
    {
        $this->app->singleton('pack', function ($app) {
            return new Pack();
        });
    }
}

<?php

namespace NineCells\Assets\AdminLTE;

use Illuminate\Support\ServiceProvider;

class AdminLTEServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/assets' => public_path('vendor/ninecells/assets-admin-lte'),
        ], 'public');
    }

    public function register()
    {
    }
}

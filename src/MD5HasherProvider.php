<?php

namespace Laravist\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // app('md5hash')
        $this->app->singleton('md5hash', function() {
            return new MD5Hasher();
        });
    }
}

<?php

namespace App\Providers;

use App\Contracts\Services\GreetingService;
use App\Services\HelloService;
use Illuminate\Support\ServiceProvider;

class GreetingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GreetingService::class, function ($app) {
            return new HelloService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

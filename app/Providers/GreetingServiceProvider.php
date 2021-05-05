<?php

namespace App\Providers;

use App\Contracts\Services\GreetingService;
use App\Services\GoodbyeService;
use App\Services\HelloService;
use Illuminate\Support\Facades\Config;
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
        // $this->app->bind(GreetingService::class, HelloService::class);
        $locale = Config::get('app.locale');
        $this->app->bind(GreetingService::class, function ($app) use ($locale) {
            if ($locale !== 'ja') {
                return new GoodbyeService();
            }
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

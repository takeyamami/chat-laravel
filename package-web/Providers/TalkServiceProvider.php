<?php

namespace MyApp\Providers;

use Illuminate\Support\ServiceProvider;

class TalkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TalkApplicationService', TalkApplicationService::class);
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

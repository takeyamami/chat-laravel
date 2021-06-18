<?php

namespace MyApp\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \MyApp\domain\models\talk\ITalkRepository::class, function($app) {
                return new \MyApp\Infrastructure\Persistence\TalkRepository;
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

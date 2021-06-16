<?php

namespace MyApp\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('chat.index', '\MyApp\Http\Composers\ChatComposer');
    }
}

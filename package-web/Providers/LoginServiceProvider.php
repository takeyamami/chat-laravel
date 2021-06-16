<?php

namespace MyApp\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use MyApp\Http\Validators\EmailValidator;

class LoginServiceProvider extends ServiceProvider
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
        $validator = $this->app['validator'];
        $validator->resolver(function($trancelator, $data, $rules, $messages) {
            return new EmailValidator($trancelator, $data, $rules, $messages);
        });
    }
}

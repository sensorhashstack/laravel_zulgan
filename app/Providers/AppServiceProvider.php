<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('email_domain', function($attribute, $value, $parameters, $validator) {
        	$allowedEmailDomains = ['example.com', 'sub.example.com'];
        	return in_array( explode('@', $parameters[0])[1] , $allowedEmailDomains);
        });
    }
}

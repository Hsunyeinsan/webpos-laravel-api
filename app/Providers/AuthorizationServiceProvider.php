<?php

namespace App\Providers;

use App\Models\Customer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthorizationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Gate::define("view-customer",function($user,Customer $customer){
            return $user->id===$customer->user_id;
        });
    }
}

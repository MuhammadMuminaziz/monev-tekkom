<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('operator', function (User $user) {
            return $user->role->name === 'Operator';
        });
        Gate::define('verifikator', function (User $user) {
            return $user->role->name === 'Verifikator';
        });
        Gate::define('super_admin', function (User $user) {
            return $user->role->name === 'SuperAdmin';
        });
        Gate::define('owner', function (User $user) {
            return $user->role->name === 'Owner';
        });
    }
}

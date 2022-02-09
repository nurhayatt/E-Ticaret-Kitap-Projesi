<?php

namespace App\Providers;

use App\Model\User;
use ErrorException;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('superadmin', function (User $user) {
            try {
                return $user->role->the_role !== null && $user->role->the_role === 'superadmin';
            } catch (\Throwable $th) {
                return false;
            }
        });

        Gate::define('admin', function (User $user) {
            try {
                return $user->role->the_role === 'admin';
            } catch (\Throwable $th) {
                return false;
            }
        });
    }
}
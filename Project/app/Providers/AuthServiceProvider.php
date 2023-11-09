<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Auth\CustomUserProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Auth::provider('custom', function ($app, array $config) {
            return new CustomUserProvider($app['hash'], $config['model']);
        });
    }
}

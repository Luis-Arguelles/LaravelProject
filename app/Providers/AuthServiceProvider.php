<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Module;
use App\Models\Evaluation;
use App\Models\EvaluationEleve;

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
        Gate::define('update-module', function (User $user) {
            return $user->prof === 1;
        });

        Gate::define('update-evaluation', function (User $user) {
            return $user->prof === 1;
        });

        Gate::define('update-evaluationEleve', function (User $user) {
            return $user->prof === 1;
        });
    }
}

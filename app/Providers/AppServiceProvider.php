<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
Use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();

        Gate::define('teacher',function(User $user){
            return $user->userIsTeacher;
        });

        Gate::define('auth',function(User $user){
            return $user->user;
        });
    }
}

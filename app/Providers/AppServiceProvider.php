<?php

namespace App\Providers;

use App\Http\Repositories\Repository;
use App\Http\Repositories\UserRepository;
use App\Http\Services\Service;
use App\Http\Services\UserService;
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
        $this->app->bind(Service::class,Repository::class);
        $this->app->bind(UserService::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AuthService;
use App\Interfaces\AuthRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Interfaces\HolidayRepositoryInterface;
use App\Repositories\HolidayRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(HolidayRepositoryInterface::class, HolidayRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

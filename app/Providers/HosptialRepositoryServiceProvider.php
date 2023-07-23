<?php

namespace App\Providers;

use App\Interfaces\HospitalRepositoryInterface;
use App\Repositories\HospitalRepository;
use Illuminate\Support\ServiceProvider;

class HosptialRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HospitalRepositoryInterface::class, HospitalRepository::class);
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

<?php

namespace App\Providers;

use App\Services\HospitalService;
use Illuminate\Support\ServiceProvider;

class HospitalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(HospitalService::class);
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

<?php

namespace App\Providers;

use App\Models\order;
use App\Observers\OrderObserver;

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
        order::observe(OrderObserver::class);
    }
}

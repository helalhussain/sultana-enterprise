<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use App\Models\User;
use auth;

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
    public function boot(): void
    {

        view()->share('logoIcon', $logoIcon = Setting::first());
        view()->share('site', $site= Setting::first());
        view()->share('setting', $setting = Setting::first());
        Paginator::useBootstrap();
    }
}

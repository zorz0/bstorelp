<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        if (!app()->runninginconsole()) {


            $setting = Setting::firstor(function () {
                return Setting::create([
                    'title' => 'site_name',
                    'description' => 'bait-khairat'
                ]);
            });
            view()->share('setting', $setting);
        }
    }
}

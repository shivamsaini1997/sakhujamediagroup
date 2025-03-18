<?php

namespace App\Providers;

use App\Models\GlobalSetting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View; // Make sure this is the correct import
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
        $globalSetting = GlobalSetting::first(); // Fetch the first record from GlobalSetting
        // dd( $globalSetting );
        View::share('globalSetting', $globalSetting);

        View::composer('*', function ($view) {
            if (Auth::check()) {
                $userAdmin = Auth::user();
                $view->with('user', $userAdmin);
            }
        });

    }
}

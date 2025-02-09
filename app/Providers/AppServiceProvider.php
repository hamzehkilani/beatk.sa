<?php

namespace App\Providers;

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
        $this->loadMigrationsFrom([

            base_path('app/Modules/Category/Migrations'),
            base_path('app/Modules/Product/Migrations'),
            base_path('app/Modules/Auction/Migrations'),
            // Add more module migration paths here if needed
        ]);
    }
}

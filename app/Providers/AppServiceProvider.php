<?php

namespace App\Providers;

use Filament\Support\Facades\FilamentIcon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        FilamentIcon::register([
            'panels::theme-switcher.light-button' => 'heroicon-s-sun',
            'panels::topbar.open-database-notifications-button' => 'heroicon-s-bell',
            'panels::tenant-menu.toggle-button' => 'heroicon-s-chevron-up-down',
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

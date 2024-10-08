<?php

namespace App\Providers;

use Filament\Actions\MountableAction;
use Filament\Pages\Page;
use Filament\Support\Enums\Alignment;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        /**
         * Replace icons on the interface.
         * 
         * @var FilamentIcon
         */
        FilamentIcon::register([
            'panels::pages.dashboard.navigation-item' => 'heroicon-s-rectangle-group',
            'panels::theme-switcher.light-button' => 'heroicon-s-sun',
            'panels::topbar.open-database-notifications-button' => 'heroicon-s-bell',
            'panels::tenant-menu.toggle-button' => 'heroicon-s-chevron-up-down',
        ]);

        /**
         * Position the action buttons on pages to the right.
         * 
         * @var Page
         */
        Page::formActionsAlignment(Alignment::Right);

        /**
         * Position the action buttons on modals to the right.
         * 
         * @var MountableAction
         */
        MountableAction::configureUsing(fn(MountableAction $action): MountableAction => $action->modalFooterActionsAlignment(Alignment::Right));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 
    }
}

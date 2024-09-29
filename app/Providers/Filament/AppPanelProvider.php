<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\Tenancy\EditTeamProfile;
use App\Filament\App\Pages\Tenancy\RegisterTeam;
use App\Models\Team;
use Filament\FontProviders\LocalFontProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Joaopaulolndev\FilamentEditProfile\FilamentEditProfilePlugin;
use Joaopaulolndev\FilamentEditProfile\Pages\EditProfilePage;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('app')
            ->path('app')
            ->spa()
            ->login()

            // colors
            ->colors([
                'primary' => Color::Zinc,
            ])

            // font settings
            ->font(
                'Inter',
                url: asset('css/fonts.css'),
                provider: LocalFontProvider::class,
            )

            // collapsible sidebar on desktop view
            ->sidebarCollapsibleOnDesktop()

            // notification
            ->databaseNotifications()
            ->databaseNotificationsPolling('5s')

            // discover entities
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\\Filament\\App\\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\\Filament\\App\\Pages')
            ->discoverWidgets(in: app_path('Filament/App/Widgets'), for: 'App\\Filament\\App\\Widgets')

            // custom pages
            ->pages([
                Pages\Dashboard::class,
            ])

            // middlewares
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])

            // authentication
            ->authMiddleware([
                Authenticate::class,
            ])
            ->authGuard('user')

            // global search key bindings
            ->globalSearchKeyBindings(['command+s', 'ctrl+s'])

            // set content width
            ->maxContentWidth(MaxWidth::ScreenTwoExtraLarge)

            // tenant settings
            ->tenant(Team::class, ownershipRelationship: 'team')
            ->tenantRegistration(RegisterTeam::class)
            ->tenantProfile(EditTeamProfile::class)
            ->tenantMenuItems([
                // 'edit' => MenuItem::make()->visible(fn(): bool => ),
                'register' => MenuItem::make()->hidden()
            ])

            // User dropdown menu
            ->userMenuItems([
                'profile' => MenuItem::make()
                    ->label(fn() => auth()->user()->name)
                    ->url(fn(): string => EditProfilePage::getUrl())
                    ->icon('heroicon-m-user-circle')
                    ->visible(fn(): bool => auth()->user()->teams()->exists()),
            ])

            // Plugins
            ->plugins([
                // User Profile Editor Plugin
                FilamentEditProfilePlugin::make()
                    ->slug('user/profile')
                    ->shouldRegisterNavigation(false)
                    ->shouldShowDeleteAccountForm(false)
                    ->shouldShowAvatarForm(
                        value: true,
                        directory: 'avatars', // image will be stored in 'storage/app/public/avatars
                        rules: 'mimes:jpeg,png|max:1024' //only accept jpeg and png files with a maximum size of 1MB
                    ),
            ]);
    }
}

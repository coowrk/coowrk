<?php

namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Support\Str;

class EditTeamProfile extends EditTenantProfile
{
    // navigation title
    public static function getLabel(): string
    {
        return 'Einstellungen';
    }

    // page title
    public function getTitle(): string
    {
        return "{$this->data['name']} - Einstellungen";
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug'),
            ]);
    }
}

<?php

namespace App\Filament\App\Pages\Tenancy;

use App\Models\Team;
use Filament\Forms\Components\{Section, TextInput};
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Support\Str;

class RegisterTeam extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register team';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columnSpan(1)
                    ->schema([
                        TextInput::make('name'),
                    ])
            ]);
    }

    protected function handleRegistration(array $data): Team
    {
        $team = Team::create($data);

        $team->members()->attach(
            ['id' => Str::lower(Str::ulid())],
            auth()->user()
        );

        return $team;
    }
}

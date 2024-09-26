<?php

namespace App\Filament\App\Pages\Tenancy;

use App\Models\Team;
use Filament\Forms\Components\{Section, TextInput};
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Support\Str;

class RegisterTeam extends RegisterTenant
{
    // navigation title
    public static function getLabel(): string
    {
        return 'Register team';
    }

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
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

    /**
     * Process the given data.
     * 
     * @return 
     */
    protected function handleRegistration(array $data): Team
    {
        // create team
        $team = Team::create($data);

        // add user to team
        $team->members()->attach(
            auth()->user(),
            ['id' => Str::lower(Str::ulid())]
        );

        // return team data
        return $team;
    }
}

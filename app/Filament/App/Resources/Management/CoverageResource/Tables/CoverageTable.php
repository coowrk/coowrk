<?php

namespace App\Filament\App\Resources\Management\CoverageResource\Tables;

use App\Components\Enums\Coverage\SectionEnum;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns\{ColumnGroup, TextColumn};
use TomatoPHP\FilamentHelpers\Contracts\TableBuilder;

class CoverageTable extends TableBuilder
{
    public function table(Table $table): Table
    {
        return $table->columns([
            ColumnGroup::make('Kunde')
                ->columns([
                    // salutation
                    TextColumn::make('customer.salutation')
                        ->label('Anrede')
                        ->placeholder('Keine Angabe')
                        ->color(Color::Zinc)
                        ->searchable()
                        ->sortable()
                        ->toggleable(),

                    // full_name
                    TextColumn::make('customer.full_name')
                        ->label('Name')
                        ->searchable(['first_name', 'last_name'])
                        ->sortable(['first_name', 'last_name'])
                ]),

            ColumnGroup::make('Vertrag')
                ->columns([
                    // contract_number
                    TextColumn::make('contract_number')
                        ->label('Vertragsnummer')
                        ->sortable(),

                    // sections
                    TextColumn::make('sections')
                        ->label('Sparte(n)')
                        ->badge()
                        ->sortable()
                        ->formatStateUsing(fn(string $state): SectionEnum => SectionEnum::from($state))
                        ->toggleable(),
                ]),

            ColumnGroup::make('Daten')
                ->columns([
                    // coverable_at
                    TextColumn::make('coverable_at')
                        ->label('Umdeckungsdatum')
                        ->date('d.m.Y')
                        ->sortable()
                        ->toggleable(),

                    // expiration_at
                    TextColumn::make('expiration_at')
                        ->label('Ablaufdatum')
                        ->date('d.m.Y')
                        ->color(Color::Zinc)
                        ->sortable()
                        ->toggleable(),

                    // created_at
                    TextColumn::make('created_at')
                        ->label('Erstellt am')
                        ->date('d.m.Y')
                        ->color(Color::Zinc)
                        ->sortable()
                ]),
        ])
            ->filters([
                // 
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->paginated([10, 25, 50]);
    }
}

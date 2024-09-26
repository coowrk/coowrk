<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Tables;

use Filament\Support\Colors\Color;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\{ColumnGroup, TextColumn};
use TomatoPHP\FilamentHelpers\Contracts\TableBuilder;

class ShortLetterTable extends TableBuilder
{
    public function table(Table $table): Table
    {
        return $table
            ->columns([
                // customer
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

                // short-letter
                ColumnGroup::make('Brief')
                    ->columns([
                        // salutation
                        TextColumn::make('title')
                            ->label('Betreff')
                            ->placeholder('Keine Angabe')
                            ->searchable()
                            ->sortable(),
                    ]),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d.m.Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
                    ->sortable()
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

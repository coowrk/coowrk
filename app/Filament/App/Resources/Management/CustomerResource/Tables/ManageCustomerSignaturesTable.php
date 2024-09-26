<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Tables;

use Filament\Tables\Actions\{CreateAction, ActionGroup, EditAction, DeleteAction, BulkActionGroup, DeleteBulkAction};
use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns\{ImageColumn, TextColumn};
use TomatoPHP\FilamentHelpers\Contracts\TableBuilder;

class ManageCustomerSignaturesTable extends TableBuilder
{
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('value')
            ->columns([
                // type
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable(),

                // value
                ImageColumn::make('signature')
                    ->label('Unterschrift'),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d. F Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
                    ->sortable()
            ])
            ->headerActions([
                CreateAction::make()
                    ->modalWidth('5xl'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()
                        ->modalWidth('5xl'),

                    DeleteAction::make(),
                ])
            ])
            ->emptyStateHeading('Keine Unterschrift(en) gefunden')
            ->emptyStateDescription('Erstelle eine Unterschrift.')
            ->emptyStateActions([
                CreateAction::make()->modalWidth('5xl')
            ])
            ->paginated([10, 25, 50]);
    }
}

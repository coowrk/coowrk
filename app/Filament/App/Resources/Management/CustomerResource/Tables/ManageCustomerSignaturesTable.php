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
            ->filters([
                // 
            ])
            ->headerActions([
                CreateAction::make()
                    ->modalWidth('md'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()
                        ->modalWidth('md'),

                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([10, 25, 50]);
    }
}

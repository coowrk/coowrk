<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Tables;

use App\Components\Enums\Customer\ContactTypeEnum;
use Filament\Tables\Actions\{CreateAction, ActionGroup, EditAction, DeleteAction, BulkActionGroup, DeleteBulkAction};
use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use TomatoPHP\FilamentHelpers\Contracts\TableBuilder;

class ManageCustomerContactsTable extends TableBuilder
{
    public function table(Table $table): Table
    {
        return $table
            ->heading('Kontaktmöglichkeiten')
            ->description('Verwalte die Kontaktmöglichkeiten des Kunden.')
            ->poll()
            ->deferLoading()
            ->recordTitleAttribute('value')
            ->columns([
                // type
                TextColumn::make('type')
                    ->label('Kontakttyp')
                    ->color(Color::Zinc)
                    ->sortable(),

                // value
                TextColumn::make('value')
                    ->label('Kontakt')
                    ->copyable(),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d. F Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Kontakttyp')
                    ->options(ContactTypeEnum::class)
                    ->native(false)
            ])
            ->headerActions([
                CreateAction::make()
                    ->modalWidth('md')
                    ->modalHeading('Kontaktmöglichkeit erstellen'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()
                        ->modalWidth('md')
                        ->modalHeading('Kontaktmöglichkeit bearbeiten'),

                    DeleteAction::make()
                        ->modalHeading('Kontaktmöglichkeit löschen'),
                ])
            ])
            ->emptyStateHeading('Keine Kontaktmöglichkeit(en) gefunden')
            ->emptyStateDescription('Erstelle eine Kontaktmöglichkeit.')
            ->emptyStateActions([
                CreateAction::make()->modalWidth('5xl')
            ])
            ->paginationPageOptions([10, 25, 50]);
    }
}

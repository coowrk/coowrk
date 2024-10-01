<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Tables;

use App\Components\Enums\User\SalutationEnum;
use App\Filament\App\Resources\Management\CustomerResource;
use App\Filament\App\Components\Imports\CustomerImporter;
use App\Models\Customer;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns\{ColumnGroup, TextColumn};
use Filament\Tables\Filters\SelectFilter;
use TomatoPHP\FilamentHelpers\Contracts\TableBuilder;

class CustomerTable extends TableBuilder
{
    public function table(Table $table): Table
    {
        return $table
            ->poll()
            ->deferLoading()
            ->columns([
                // customer
                ColumnGroup::make('Kunde')
                    ->columns([
                        // salutation
                        TextColumn::make('salutation')
                            ->label('Anrede')
                            ->placeholder('Keine Angabe')
                            ->color(Color::Zinc)
                            ->searchable()
                            ->sortable()
                            ->toggleable(),

                        // full_name
                        TextColumn::make('full_name')
                            ->label('Name')
                            ->searchable(['first_name', 'last_name'])
                            ->sortable(['first_name', 'last_name'])
                    ]),

                // address
                ColumnGroup::make('Adresse')
                    ->columns([
                        // street
                        TextColumn::make('street')
                            ->label('Straße')
                            ->color(Color::Zinc)
                            ->formatStateUsing(
                                fn(Customer $record): string => "{$record->street} {$record->house_number}"
                            )
                            ->searchable(['street', 'house_number'])
                            ->sortable()
                            ->toggleable(),

                        // city
                        TextColumn::make('city')
                            ->label('Stadt')
                            ->color(Color::Zinc)
                            ->searchable('city')
                            ->sortable()
                            ->toggleable(),

                        // postalcode
                        TextColumn::make('postalcode')
                            ->label('Postleitzahl')
                            ->color(Color::Zinc)
                            ->searchable('postalcode')
                            ->sortable()
                            ->toggleable()
                    ]),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d.m.Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
                    ->sortable()
            ])
            ->searchPlaceholder('Suche (Name, Straße, ...)')
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('salutation')
                    ->label('Anrede')
                    ->options(SalutationEnum::class)
                    ->native(false)
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->headerActions([
                Tables\Actions\ImportAction::make()
                    ->label('Kunden importieren')
                    ->importer(CustomerImporter::class),

                Tables\Actions\CreateAction::make()
                    ->label('Kunde erstellen'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([10, 25, 50])
            ->recordUrl(fn(Customer $record): string => CustomerResource::getUrl('view', [$record]));
    }
}

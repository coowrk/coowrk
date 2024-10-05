<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Filament\App\Resources\Management\CustomerResource;
use App\Models\Customer;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\FontWeight;
use Illuminate\Contracts\Support\Htmlable;

class ViewCustomer extends ViewRecord
{
    // resource
    protected static string $resource = CustomerResource::class;

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-user';

    /**
     * Set the breadcrumbs for this resource.
     * 
     * @return array
     */
    public function getBreadcrumbs(): array
    {
        return [
            CustomerResource::getUrl('index') => 'Kunden',
            $this->record->full_name
        ];
    }

    /**
     * Set the resource page title.
     * 
     * @return string|Htmlable
     */
    public function getTitle(): string | Htmlable
    {
        return $this->record->full_name;
    }

    /**
     * Set the navigation label for this resource.
     * 
     * @return string
     */
    public static function getNavigationLabel(): string
    {
        return 'Allgemein';
    }

    /**
     * infolist which replaces the default disabled form.
     * 
     * @return Infolist
     */
    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Kunde')
                    ->description('Allgemeine Informationen über den aufgerufenen Kunden.')
                    ->icon('heroicon-s-user')
                    ->aside()
                    ->columns(3)
                    ->schema([
                        // salutation
                        TextEntry::make('salutation')
                            ->label('Anrede')
                            ->color(Color::Zinc)
                            ->copyableState(fn(Customer $record): string => $record->salutation->getLabel())
                            ->copyable(),

                        // full name
                        TextEntry::make('full_name')
                            ->label('Name')
                            ->weight(FontWeight::Medium)
                            ->copyable(),


                        // full name
                        TextEntry::make('created_at')
                            ->label('Erstellt am')
                            ->color(Color::Zinc)
                            ->date('d. F Y'),

                        Fieldset::make('Adresse')
                            ->columns(3)
                            ->schema([
                                // street
                                TextEntry::make('street')
                                    ->label('Straße')
                                    ->formatStateUsing(fn(Customer $record): string => "{$record->street} {$record->house_number}")
                                    ->copyableState(fn(Customer $record): string => "{$record->street} {$record->house_number}")
                                    ->copyable(),

                                // city
                                TextEntry::make('city')
                                    ->label('Stadt')
                                    ->formatStateUsing(fn(Customer $record): string => "{$record->postalcode} {$record->city}")
                                    ->copyableState(fn(Customer $record): string => "{$record->postalcode} {$record->city}")
                                    ->copyable(),

                                // country
                                TextEntry::make('country')
                                    ->label('Land')
                                    ->copyable(),
                            ])
                    ]),

                Section::make('Kontaktmöglichkeiten')
                    ->description('Verschiedene Möglichkeiten den Kunden zu kontaktieren.')
                    ->icon('heroicon-s-at-symbol')
                    ->aside()
                    ->schema([
                        RepeatableEntry::make('contacts')
                            ->label('Kontaktmöglichkeiten')
                            ->grid(2)
                            ->columns(3)
                            ->hiddenLabel(true)
                            ->schema([
                                // contacts.type
                                TextEntry::make('type')
                                    ->label('Kontakttyp')
                                    ->hiddenLabel(true)
                                    ->badge(),

                                // contacts.value
                                TextEntry::make('value')
                                    ->label('Kontakt')
                                    ->hiddenLabel(true)
                                    ->copyable()
                                    ->columnSpan(2)
                            ])
                    ])->visible(fn(Customer $record): bool => $record->contacts()->exists()),
            ]);
    }
}

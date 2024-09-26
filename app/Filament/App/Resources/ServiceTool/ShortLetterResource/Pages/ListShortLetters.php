<?php

namespace App\Filament\App\Resources\ServiceTool\ShortLetterResource\Pages;

use App\Filament\App\Resources\ServiceTool\ShortLetterResource;
use App\Models\ShortLetter;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListShortLetters extends ListRecords
{
    // resource
    protected static string $resource = ShortLetterResource::class;

    /**
     * Set the header actions for this resource.
     * 
     * @return array
     */
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    /**
     * Get all available tabs for this resource.
     * 
     * @return array
     */
    public function getTabs(): array
    {
        return [
            // all
            'all' => Tab::make()->label('Alle'),

            // not_send_yet
            'not_send_yet' => Tab::make()
                ->label('Noch nicht versendet')
                ->icon('heroicon-s-building-office')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', '0')),

            // on_the_post_way
            'on_the_post_way' => Tab::make()
                ->label('Auf dem Postweg')
                ->icon('heroicon-s-truck')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', '1')),

            // presumably_with_the_customer
            'presumably_with_the_customer' => Tab::make()
                ->label('Mutmaßlich Beim Kunden')
                ->icon('heroicon-s-user')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', '2')),

            // postal_returns
            'postal_return' => Tab::make()
                ->label('Postrückläufer')
                ->icon('heroicon-s-backspace')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', '3')),

            // archived
            'archived' => Tab::make()
                ->label('Archiviert')
                ->icon('heroicon-s-archive-box')
                ->badge(fn() => ShortLetter::query()->where('status', '4')->count())
                ->modifyQueryUsing(fn(Builder $query) => $query->where('status', '4')),
        ];
    }
}

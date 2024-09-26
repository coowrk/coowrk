<?php

namespace App\Filament\App\Resources\Management\CoverageResource\Pages;

use App\Filament\App\Resources\Management\CoverageResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListCoverages extends ListRecords
{
    // resource
    protected static string $resource = CoverageResource::class;

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
            'all' => Tab::make()->label('Alle'),
            'unfinished' => Tab::make()
                ->label('Unerledigt')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('coverage_finished', false)),
            'finished' => Tab::make()
                ->label('Erledigt')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('coverage_finished', true)),
        ];
    }
}

<?php

namespace App\Filament\App\Resources\Management\CoverageResource\Pages;

use App\Filament\App\Resources\Management\CoverageResource;
use App\Models\Coverage;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoverage extends EditRecord
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
            Actions\Action::make('finished')
                ->label('Erledigt')
                ->hidden(fn(Coverage $record): bool => $record->coverage_finished)
                ->action(fn(Coverage $record) => $record->update(['coverage_finished' => true])),

            Actions\Action::make('unfinished')
                ->label('Unerledigt')
                ->visible(fn(Coverage $record): bool => $record->coverage_finished)
                ->action(fn(Coverage $record) => $record->update(['coverage_finished' => false])),

            Actions\DeleteAction::make(),
        ];
    }
}

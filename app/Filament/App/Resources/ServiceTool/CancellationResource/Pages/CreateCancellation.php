<?php

namespace App\Filament\App\Resources\CancellationResource\Pages;

use App\Filament\App\Resources\ServiceTool\CancellationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCancellation extends CreateRecord
{
    protected static string $resource = CancellationResource::class;
}

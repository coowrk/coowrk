<?php

namespace App\Filament\Resources\Management\CustomerResource\Pages;

use App\Filament\Resources\Management\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}

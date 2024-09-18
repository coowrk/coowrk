<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Filament\App\Resources\Management\CustomerResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    // resource
    protected static string $resource = CustomerResource::class;
}

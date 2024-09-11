<?php

namespace App\Filament\Resources\ServiceTool\BrokerAuthorityResource\Pages;

use App\Filament\Resources\ServiceTool\BrokerAuthorityResource;
use App\Models\BrokerAuthority;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrokerAuthority extends EditRecord
{
    protected static string $resource = BrokerAuthorityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\Action::make('pdf')
                ->label('Download PDF')
                ->action(function (BrokerAuthority $brokerAuthority) {
                    return Pdf::loadView('pdf.broker-authority')->download('myfile.pdf');
                })
        ];
    }
}

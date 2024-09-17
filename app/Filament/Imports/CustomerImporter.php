<?php

namespace App\Filament\Imports;

use App\Filament\Components\Enums\UserSalutationEnum;
use App\Models\Customer;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Filament\Forms\Components\Checkbox;
use Illuminate\Validation\Rules\Enum;

class CustomerImporter extends Importer
{
    protected static ?string $model = Customer::class;

    public $tenant = null;

    public function __construct(
        protected Import $import,
        protected array $columnMap,
        protected array $options,
    ) {
        $this->tenant = filament()->getTenant();
    }

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('salutation')
                ->exampleHeader('salutation')
                ->label('Anrede')
                ->requiredMapping()
                ->rules(['required', 'max:255', new Enum(UserSalutationEnum::class)]),

            ImportColumn::make('first_name')
                ->exampleHeader('first_name')
                ->label('Vorname')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('last_name')
                ->exampleHeader('last_name')
                ->label('Nachname')
                ->rules(['max:255']),

            ImportColumn::make('street')
                ->exampleHeader('street')
                ->label('Straße')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('house_number')
                ->exampleHeader('house_number')
                ->label('Hausnummer')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('postalcode')
                ->exampleHeader('postalcode')
                ->label('Postleitzahl')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('city')
                ->exampleHeader('city')
                ->label('Stadt')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('country')
                ->exampleHeader('country')
                ->label('Land')
        ];
    }

    public function resolveRecord(): ?Customer
    {
        return Customer::create($this->data)
            ->team()
            ->associate($this->tenant);
    }

    protected function afterCreate(): void
    {
        $this->getRecord()->syncToCurrentTenant(filament()->getTenant()->id);
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your customer import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}

<?php

namespace App\Filament\App\Resources\Management\CustomerResource\Pages;

use App\Components\Enums\Customer\ContactTypeEnum;
use App\Filament\App\Resources\Management\CustomerResource;
use App\Filament\App\Resources\Management\CustomerResource\Forms\ManageCustomerContactsForm;
use Filament\Forms\Form;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Support\Colors\Color;
use Filament\Tables\Actions\{CreateAction, ActionGroup, EditAction, DeleteAction, BulkActionGroup, DeleteBulkAction};
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class ManageCustomerContacts extends ManageRelatedRecords
{
    // resource
    protected static string $resource = CustomerResource::class;

    // relationship
    protected static string $relationship = 'contacts';

    // navigation
    protected static ?string $navigationIcon = 'heroicon-s-at-symbol';
    protected static ?string $navigationGroup = 'Verknüpfungen';

    /**
     * Set the breadcrumbs for this resource.
     * 
     * @return array
     */
    public function getBreadcrumbs(): array
    {
        return [
            CustomerResource::getUrl('index') => 'Kunden',
            CustomerResource::getUrl('view', [$this->record->id]) => $this->record->full_name,
            $this->getNavigationLabel()
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
        return 'Kontaktmöglichkeiten';
    }

    /**
     * Create a form for the create and edit resource.
     * 
     * @return Form
     */
    public function form(Form $form): Form
    {
        return $form
            ->schema(ManageCustomerContactsForm::schema());
    }

    /**
     * Create a table for the listing resource.
     * 
     * @return Table 
     */
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('value')
            ->columns([
                // type
                TextColumn::make('type')
                    ->label('Kontakttyp')
                    ->color(Color::Zinc)
                    ->sortable(),

                // value
                TextColumn::make('value')
                    ->label('Kontakt')
                    ->copyable(),

                // created_at
                TextColumn::make('created_at')
                    ->label('Erstellt am')
                    ->date('d. F Y')
                    ->color(Color::Zinc)
                    ->alignEnd()
                    ->sortable()
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Kontakttyp')
                    ->options(ContactTypeEnum::class)
                    ->native(false)
            ])
            ->headerActions([
                CreateAction::make()
                    ->modalWidth('md'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()
                        ->modalWidth('md'),

                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->paginated([10, 25, 50]);
    }
}

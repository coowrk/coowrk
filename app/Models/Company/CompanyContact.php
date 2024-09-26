<?php

namespace App\Models\Company;

use App\Components\Enums\Company\ContactTypeEnum;
use App\Filament\Components\Enums\CompanyContactTypeEnum;
use App\Models\Company;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyContact extends Model
{
    use HasFactory, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'value'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'type' => ContactTypeEnum::class
        ];
    }

    /**
     * The customer that belongs to the contact data.
     * 
     * @return HasMany
     */
    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

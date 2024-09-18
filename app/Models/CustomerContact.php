<?php

namespace App\Models;

use App\Filament\Components\Enums\CustomerContactTypeEnum;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomerContact extends Model
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
            'type' => CustomerContactTypeEnum::class
        ];
    }

    /**
     * The customer that belongs to the contact data.
     * 
     * @return HasMany
     */
    public function contacts(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}

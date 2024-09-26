<?php

namespace App\Models\Customer;

use App\Components\Enums\Customer\ContactTypeEnum;
use App\Models\Customer;
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
            'type' => ContactTypeEnum::class
        ];
    }

    /**
     * The customer that belongs to the contact data.
     * 
     * @return HasMany
     */
    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}

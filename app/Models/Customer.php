<?php

namespace App\Models;

use App\Components\Enums\User\SalutationEnum;
use App\Components\Traits\HasModelTenancy;
use App\Models\Customer\CustomerContact;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory, HasUlids, HasModelTenancy;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'salutation',
        'first_name',
        'last_name',
        'street',
        'house_number',
        'postalcode',
        'city',
        'country',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'salutation' => SalutationEnum::class
        ];
    }

    /**
     * Mutate the first and last name to full name
     *
     * @return Attribute|string
     */
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn(): string => "{$this->first_name} {$this->last_name}",
        );
    }

    /**
     * The team that belongs to the customer.
     * 
     * @return BelongsToMany
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * The contacts that are associated with the customer.
     * 
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(CustomerContact::class);
    }

    /**
     * The signatures that are associated with the customer.
     * 
     * @return HasMany
     */
    public function signatures(): BelongsToMany
    {
        return $this->belongsToMany(Signature::class)
            ->withTimestamps();
    }
}

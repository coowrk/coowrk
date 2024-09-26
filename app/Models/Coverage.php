<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coverage extends Model
{
    use HasFactory, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'contract_number',
        'sections',
        'expiration_at',
        'coverable_at',
        'existing_contracts',
        'coverage_finished'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'sections' => 'array',
    ];

    /**
     * The team that belongs to the information-attorney.
     * 
     * @return BelongsToMany
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * The customer that belongs to the coverage.
     * 
     * @return BelongsToMany
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Signature extends Model
{
    use HasFactory, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'signature',
    ];

    /**
     * The customers that are associated with the signature.
     * 
     * @return HasMany
     */
    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class);
    }
}

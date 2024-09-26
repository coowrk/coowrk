<?php

namespace App\Models;

use App\Components\Traits\HasModelTenancy;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BrokerAttorney extends Model
{
    use HasFactory, HasUlids, HasModelTenancy;

    /**
     * The team that belongs to the broker-attorney.
     * 
     * @return BelongsToMany
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}

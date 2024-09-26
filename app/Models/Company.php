<?php

namespace App\Models;

use App\Models\Company\CompanyContact;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory, HasUlids;

    /**
     * The teams that are associated with the company.
     * 
     * @return HasMany
     */
    public function teams(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    /**
     * The contacts that are associated with the company.
     * 
     * @return HasMany
     */
    public function contacts(): HasMany
    {
        return $this->hasMany(CompanyContact::class);
    }
}

<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Team extends Model implements HasName
{
    use HasFactory, HasUlids;

    public function getFilamentName(): string
    {
        return "{$this->name} {$this->slug}";
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * The company that is associated with the team.
     * 
     * @return HasOne
     */
    public function company(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * The users that belong to the team.
     * 
     * @return BelongsToMany
     */
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * The customers that are associated with the team.
     * 
     * @return HasMany
     */
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    /**
     * The shortletters that are associated with the team.
     * 
     * @return HasMany
     */
    public function shortletters(): HasMany
    {
        return $this->hasMany(ShortLetter::class);
    }
}

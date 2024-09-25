<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortLetter extends Model
{
    use HasFactory, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'team_id',
        'sent_at',
        'sent_from',
        'title',
        'description',
        'we_ask_for_options',
        'you_receive_this_process_options',
        'signature'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'we_ask_for_options' => 'array',
        'you_receive_this_process_options' => 'array',
    ];

    /**
     * The team that belongs to the short-letter.
     * 
     * @return BelongsToMany
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * The customer that belongs to the short-letter.
     * 
     * @return BelongsToMany
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}

<?php

namespace App\Models;

use App\Components\Traits\HasModelTenancy;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortLetter extends Model
{
    use HasFactory, HasUlids, HasModelTenancy;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'customer_id',
        'team_id',
        'signature_id',
        'user_id',
        'sent_at',
        'sent_from',
        'title',
        'description',
        'we_ask_for_options',
        'you_receive_this_process_options',
        'status'
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

    /**
     * The user that created the short-letter or is managing it.
     * 
     * @return BelongsToMany
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

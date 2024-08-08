<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShortLetterFeed extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'short_letter_id',
        'user_id',
        'new_status',
        'title',
        'comment',
    ];

    /**
     * Get the user that created the feed.
     */
    public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

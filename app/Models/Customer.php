<?php

namespace App\Models;

use App\Casts\SalutationCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'salutation',
        'first_name',
        'last_name',
        'full_name',
        'street',
        'street_number',
        'postalcode',
        'city',
        'country',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'salutation' => SalutationCast::class,
    ];

    /**
     * The "booted" method of the model.
     * 
     * @return void
     */
    public static function booted(): void
    {
        /**
         * on create, add creator id
         */
        static::creating(function ($model) {
            $model->full_name = $model->first_name . " " . $model->last_name;
        });

        /**
         * on update, add updater id
         */
        static::updating(function ($model) {
            $model->full_name = $model->first_name . " " . $model->last_name;
        });
    }

    /**
     * Return the creator of the customer
     *
     * @return BelongsTo
     */
    public function created_by_user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}

<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Letter extends Model
{
    use HasFactory, Sluggable;

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['customer'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'topic',
        'description',
        'checked',
        'salutation',
        'first_name',
        'last_name',
        'full_name',
        'street',
        'street_number',
        'postalcode',
        'city',
        'country',
        'customer_id',
        'created_by',
        'updated_by',
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
            // Set created_by
            $model->created_by = auth()->user()->id;

            // Set updated_by
            $model->updated_by = auth()->user()->id;

            // Set full_name
            $model->full_name = $model->first_name . " " . $model->last_name;
        });

        /**
         * on update, add updater id
         */
        static::updating(function ($model) {
            // Update updated_by
            $model->updated_by = auth()->user()->id;

            // Update full_name
            $model->full_name = $model->first_name . " " . $model->last_name;
        });
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'checked' => 'array',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['first_name', 'last_name', 'topic']
            ]
        ];
    }

    /**
     * Return the customer of the letter
     *
     * @return BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Return the feed of the letter
     *
     * @return BelongsTo
     */
    public function feed(): HasMany
    {
        return $this->hasMany(LetterFeed::class)->orderBy('created_at', 'desc');
    }
}

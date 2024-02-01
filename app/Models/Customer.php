<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'country'
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
}

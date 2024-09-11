<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salutation',
        'first_name',
        'last_name',
        'street',
        'house_number',
        'postcode',
        'city',
        'country'
    ];

    /**
     * Get the customer's full name.
     *
     * return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => "{$this->first_name} {$this->last_name}",
        );
    }
}

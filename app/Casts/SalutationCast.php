<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class SalutationCast implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        switch ($value) {
            case 'firm':
                return 'Firma';
                break;
            case 'madam':
                return 'Frau';
                break;
            case 'sir':
                return 'Herr';
                break;
            case 'divers':
                return 'Divers';
                break;
            default:
                return 'N/A';
                break;
        }
    }

    public function set($model, $key, $value, $attributes)
    {
        switch ($value) {
            case 'Firma':
                return 'firm';
                break;
            case 'Frau':
                return 'madam';
                break;
            case 'Herr':
                return 'sir';
                break;
            case 'Divers':
                return 'divers';
                break;
            default:
                return 'divers';
                break;
        }
    }
}

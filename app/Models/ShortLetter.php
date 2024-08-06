<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Arr;

class ShortLetter extends Model
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
        'street',
        'house_number',
        'postcode',
        'city',
        'country',
        'options',
        'reason',
        'status',
        'pdf_path',
        'customer_id',
        'user_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'options' => 'array',
        ];
    }

    /**
     * Get the feeds for the short letter.
     */
    public function feed(): HasMany
    {
        return $this->hasMany(ShortLetterFeed::class);
    }

    /**
     * return value of options array
     * 
     * @return array
     */
    public function all_options($type = null)
    {
        if ($type == 'we_ask_for')
            return [
                'anruf-ruecksprache' => 'Anruf / Rücksprache',
                'rueckgabe' => 'Rückgabe',
                'kenntnisnahme' => 'Kenntnisnahme',
                'bericht' => 'Bericht',
                'erledigung' => 'Erledigung',
                'weitere-veranlassung' => 'weitere Veranlassung',
                'stellungnahme' => 'Stellungnahme',
                'pruefung' => 'Prüfung'
            ];

        if ($type == 'cause_for_letter')
            return [
                'zur-unterschrift' => 'zur Unterschrift',
                'zum-verbleib' => 'zum Verbleib',
                'zur-weitergabe' => 'zur Weitergabe',
                'zur-vorlage' => 'zur Vorlage',
                'mit-dank-zurueck' => 'mit Dank zurück',
                'anbei-anlagen' => 'anbei Anlagen'
            ];

        return Arr::collapse([
            $this->all_options('we_ask_for'),
            $this->all_options('cause_for_letter')
        ]);
    }

    /**
     * return value of options array
     * 
     * @return string
     */
    public function option_to_value($key)
    {
        return $this->all_options()[$key];
    }

    /**
     * return badge of the current status
     * 
     * @return array
     */
    public function status_badge($status = false)
    {
        switch ($status === false ? $this->status : $status) {
            case 1:
                return [
                    'theme' => 'lime',
                    'title' => 'Erledigt'
                ];
            case 2:
                return [
                    'theme' => 'yellow',
                    'title' => 'Versand steht aus'
                ];
            case 3:
                return [
                    'theme' => 'yellow',
                    'title' => 'Auf dem Postweg'
                ];
            case 4:
                return [
                    'theme' => 'blue',
                    'title' => 'Mutmaßlich zugestellt'
                ];
            case 5:
                return [
                    'theme' => 'red',
                    'title' => 'Postrückläufer'
                ];
            case 6:
                return [
                    'theme' => 'indigo',
                    'title' => 'Rückmeldung vom Kunden'
                ];
            default:
                return [
                    'theme' => 'lime',
                    'title' => 'Erledigt'
                ];
        }
    }
}

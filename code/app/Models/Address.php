<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $country_id
 * @property Country $country
 * @property int $state_id
 * @property State $state
 * @property int $city_id
 * @property City $city
 * @property string $street
 * @property string $number
 * @property string $indoor_number
 * @property string $lat
 * @property string $lon
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Address extends Model
{
    use HasFactory;

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}

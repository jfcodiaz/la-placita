<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $name
 * @property Collection $states
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Country extends Model
{
    use HasFactory;

    public function states(): HasMany
    {
        return $this->hasMany(State::class);
    }
}

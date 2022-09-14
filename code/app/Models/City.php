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
 * @property Collection $neighborhoods
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class City extends Model
{
    use HasFactory;

    public function neighborhoods(): HasMany
    {
        return $this->hasMany(Neighborhood::class);
    }
}

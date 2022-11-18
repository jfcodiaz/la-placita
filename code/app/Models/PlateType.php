<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property Collection $plates
 */
class PlateType extends Model
{
    use HasFactory;

    public function plates(): HasMany
    {
        return $this->hasMany(Plate::class);
    }

    public function parent()
    {
        return $this->morphTo();
    }
}

<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $name
 * @property DateTime $created_at
 * @property DateTime $updated_at
 * @property int $plate_type_id
 * @property PlateType $plate_type
 */
class Plate extends Model
{
    use HasFactory;

    public function plateType(): BelongsTo
    {
        return $this->belongsTo(PlateType::class);
    }
}

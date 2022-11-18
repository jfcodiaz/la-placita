<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property int $id
 * @property string $name
 * @property MorpOne $parent
 */
class Branch extends Model
{
    use HasFactory;

    public function parent(): MorphOne
    {
        return $this->morphOne(PlateType::class, 'parent');
    }
}

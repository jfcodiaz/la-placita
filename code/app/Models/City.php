<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $name
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class City extends Model
{
    use HasFactory;
}

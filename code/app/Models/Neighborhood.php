<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $zip_code
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Neighborhood extends Model
{
    use HasFactory;
}

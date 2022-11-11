<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $code
 * @property int $name
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class CollaboratorType extends Model
{
    use HasFactory;

    public function collaborators()
    {
        return $this->hasMany(Collaborator::class);
    }
}

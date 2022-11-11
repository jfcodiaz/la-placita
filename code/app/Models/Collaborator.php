<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property int $collaborator_type_id
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Collaborator extends Model
{
    use HasFactory;

    public function collaboratorType()
    {
        return $this->belongsTo(CollaboratorType::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

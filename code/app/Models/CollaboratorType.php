<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $code
 * @property int $name
 * @property CompanyType $company_type
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class CollaboratorType extends Model
{
    use HasFactory;

    public $fillable = ['code', 'name', 'company_type_id'];

    public function company_type()
    {
        return $this->belongsTo(CompanyType::class);
    }

    public function collaborators()
    {
        return $this->hasMany(Collaborator::class);
    }
}

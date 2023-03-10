<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $company_type_id
 * @property string $name
 * @property Collection $branches
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_type_id'
    ];

    public function companyType()
    {
        return $this->belongsTo(CompanyType::class);
    }

    public function collaborators()
    {
        return $this->hasMany(Collaborator::class);
    }
}

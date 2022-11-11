<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $type_id
 * @property string $name
 * @property Collection $branches
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class Company extends Model
{
    use HasFactory;

    public function companyType()
    {
        return $this->belongsTo(CompanyType::class);
    }

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class);
    }
}

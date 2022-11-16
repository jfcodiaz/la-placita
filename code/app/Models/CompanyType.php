<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property Collection $companies
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class CompanyType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}

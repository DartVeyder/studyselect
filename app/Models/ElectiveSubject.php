<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ElectiveSubject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function departments(): HasMany
    {
        return $this->hasMany(DepartmentElectiveSubject::class);
    }

    public function electiveSubjectUserSpecialty()
    {
        return $this->hasOne(ElectiveSubjectUserSpecialty::class);
    }
}

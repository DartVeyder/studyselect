<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DepartmentElectiveSubject extends Model
{
    use HasFactory;
    protected $fillable = ['department_id', 'elective_subject_id', 'education_level_id'];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function electiveSubject(): BelongsTo
    {
        return $this->belongsTo(ElectiveSubject::class);
    }

    public function educationLevel(): BelongsTo
    {
        return $this->belongsTo(EducationLevel::class);
    }
}

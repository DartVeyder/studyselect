<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ElectiveSubjectUserSpecialty extends Model
{
    use HasFactory;
    use AsSource;

    protected $guarded = [];
    public $timestamps = false;
    public function subject()
    {
        return $this->belongsTo(ElectiveSubject::class,'elective_subject_id');
    }
}

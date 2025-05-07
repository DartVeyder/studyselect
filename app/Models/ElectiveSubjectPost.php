<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class ElectiveSubjectPost extends Model
{
    use HasFactory;
    use AsSource;

    protected $guarded = [];

    public function postUserSpecialty()
    {
        return $this->belongsTo(ElectiveSubjectPostUserSpecialty::class);
    }


}

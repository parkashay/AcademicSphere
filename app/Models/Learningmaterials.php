<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learningmaterials extends Model
{
    protected $fillable = [
        'title', 'teacher', 'date','course','keywords','content','files'
    ];
    protected $casts = [
      'keywords' => 'array',
      'files' => 'array',  
    ];
}

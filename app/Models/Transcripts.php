<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transcripts extends Model
{
    protected $fillable = [
        'name', 'content', 'passed_out','year','program'
    ];
}

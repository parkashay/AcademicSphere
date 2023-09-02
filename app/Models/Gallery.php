<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'caption', 'date', 'content', 
    ];
    protected $casts = [
        'content' => 'array'
    ];
}

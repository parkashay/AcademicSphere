<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'category', 'keywords', 'content', 'thumbnail'
    ];
    protected $casts = [
        'keywords' => 'array',
        'category' => 'array',
    ];
}

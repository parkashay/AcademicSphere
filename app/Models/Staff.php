<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'fullname', 'username', 'profile_image', 'designation','experience',
        'email','website','phone', 'content'
    ];
}

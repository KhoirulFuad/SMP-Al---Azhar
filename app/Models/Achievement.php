<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'photo',
        'achievement_date',
        'content'
    ];
}

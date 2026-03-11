<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolAgenda extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'photo',
        'agenda_date',
        'content'
    ];
}

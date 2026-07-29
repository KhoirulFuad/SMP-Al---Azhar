<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolAgenda extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'agenda_date',
        'content'
    ];
}

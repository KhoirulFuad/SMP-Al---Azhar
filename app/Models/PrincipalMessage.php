<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrincipalMessage extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'message',
        'total_students',
        'total_staff'
    ];
}

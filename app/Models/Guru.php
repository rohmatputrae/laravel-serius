<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
protected $fillable = [
        'name',
        'address',
        'work',
        'age'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Humans extends Model
{
    protected $fillable= [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'age',
        'gender',
        'address'
    ];
    // protected $table = 'human';
}

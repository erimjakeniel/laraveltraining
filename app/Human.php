<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Human extends Model
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
}

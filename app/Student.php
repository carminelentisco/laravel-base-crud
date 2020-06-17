<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillables = [
        'name',
        'age',
        'date_of_birth',
        'bith_place',
        'class',
        'address_of_studies'
    ];
}

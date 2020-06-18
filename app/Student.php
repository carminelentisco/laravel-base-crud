<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'age',
        'date_of_birth',
        'birth_place',
        'class',
        'address_of_studies'
    ];
}
   
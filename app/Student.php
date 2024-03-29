<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "students";
    public $timestamps = false;

    protected $fillable = [
        'id', 'name', 'age', 'class', 'province','image'
    ];
}

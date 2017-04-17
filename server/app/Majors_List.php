<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Majors_List extends Model
{
    protected $fillable = array (
        'major',
        'userEmail',
        'minor'
    );
}

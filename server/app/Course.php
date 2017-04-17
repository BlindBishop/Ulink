<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

    protected $fillable = array(
        'major',
        'course_number',
        'userEmail'
    );
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

    protected $fillable = array(
        'section_number',
        'course_id',
        'professor '
    );
}

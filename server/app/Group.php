<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $fillable = array(
        'title',
        'course_id'
    );
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study_Time extends Model {

    protected $fillable = array(
        'beginning',
        'end',
        'privacy',
        'group_id',
        'course_id',
        'userEmail'
    );
}

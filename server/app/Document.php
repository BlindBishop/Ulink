<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model {

    protected $fillable = array(
        'type',
        'url_loc',
        'section_id',
        'course_id',
        'group_id',
        'userEmail'
    );
}

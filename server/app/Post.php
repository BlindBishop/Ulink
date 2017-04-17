<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = array(
        'body',
        'userEmail',
        'group_id',
        'section_id',
        'course_id',
        'document_id',
        'comment_id'
    );
}

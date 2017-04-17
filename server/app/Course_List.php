<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course_List extends Model {

    protected $fillable = array(
        'major',
        'number',
        'Uname',
        'Uabb'
    );
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model {

    protected $fillable = array(
        'userEmail',
        'skill_name',
        'rating '
    );
}

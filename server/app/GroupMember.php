<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model {

    protected $fillable = array(
        'userEmail',
        'group_id'
    );
}

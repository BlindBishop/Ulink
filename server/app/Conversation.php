<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model {

    protected $fillable = array(
        'title',
        'primeUser',
        'foreignUser'
    );
}

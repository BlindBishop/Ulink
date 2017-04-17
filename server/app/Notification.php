<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

    protected $fillable = array(
        'sent',
        'viewed',
        'type',
        'primeUser',
        'foreignUser'
    );
}

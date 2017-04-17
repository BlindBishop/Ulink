<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $fillable = array (
        'primeUser',
        'foreignUser',
        'relationship',
        'status'
    );
}

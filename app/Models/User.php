<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users_football';

    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'm',
        't',
        't',
        'w',
        'th',
        'f',
        'fs',
        'su',
    ];
}

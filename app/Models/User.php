<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'full_name',
        'email',
        'option',
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

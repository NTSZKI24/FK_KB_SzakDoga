<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model{

    protected $guard = 'admin';

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}

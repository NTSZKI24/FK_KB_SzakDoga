<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    public function events(){
        return $this->hasMany(Event::class);
    }
}

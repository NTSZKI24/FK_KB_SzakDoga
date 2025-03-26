<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $fillable = ['type'];

    public function events()
    {
        return $this->hasMany(Event::class, 'types_id');
    }
}

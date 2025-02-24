<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventname',
        'eventdesc',
        'eventdate',
        'eventtime',
        'eventage',
        'image',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}

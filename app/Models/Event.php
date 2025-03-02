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
        'counties_id',
        'types_id',
        'eventplace',
        'eventage',
        'image',
        'user_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function county(){
        return $this->belongsTo(County::class, 'counties_id');
    }
    public function types(){
        return $this->belongsTo(Types::class);
    }
}

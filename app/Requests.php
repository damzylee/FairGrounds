<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function service(){

        return $this->belongsTo('App\Service');
    
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    
    }

    public function entity(){

        return $this->belongsTo('App\Entity');
    
    }
}

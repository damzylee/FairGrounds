<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];

    public function company(){

        return $this->belongsTo('App\Company');
    
    }

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function images(){

        return $this->hasMany('App\Image');
    
    }

    public function entity(){

        return $this->belongsTo('App\Entity');
    
    }
}

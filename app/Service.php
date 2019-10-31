<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function company(){

        return $this->belongsTo('App\Company');
    
    }

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function requests(){

        return $this->hasMany('App\Request');
        
    }

    public function reviews(){

        return $this->hasMany('App\Review'); 

    }
    
    public function entity(){

        return $this->belongsTo('App\Entity');
    
    }
}

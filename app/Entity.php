<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $guarded = [];

    public function albums(){

        return $this->hasMany('App\Album');
    
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    
    }
    public function companies(){

        return $this->hasMany('App\Company');
    
    }
    public function images(){

        return $this->hasMany('App\Image');
    
    }
    public function likes(){

        return $this->hasMany('App\Like');
    
    }
    public function makeRequests(){

        return $this->hasMany('App\MakeRequest');
    
    }
    public function reviews(){

        return $this->hasMany('App\Review');
    
    }
    public function services(){

        return $this->hasMany('App\Service');
    
    }
    public function users(){

        return $this->hasMany('App\User');
    
    }
}

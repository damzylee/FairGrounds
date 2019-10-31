<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function company(){

        return $this->belongsTo('App\Company');
    
    }

    public function review(){

        return $this->belongsTo('App\Review');
    
    }

    public function request(){

        return $this->belongsTo('App\Request');
    
    }

    public function entity(){

        return $this->belongsTo('App\Entity');
    
    }

    public function likes(){

        return $this->hasMany('App\Like');
    
    }
}

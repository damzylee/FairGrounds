<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function companies(){

        return $this->belongsTo('App\Company');
    
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function company(){

        return $this->belongsTo('App\Company');
    
    }

    public function user(){

        return $this->belongsTo('App\User');
    
    }

    public function album(){

        return $this->belongsTo('App\Album');
    
    }

    public function entity(){

        return $this->belongsTo('App\Entity');
    
    }
}

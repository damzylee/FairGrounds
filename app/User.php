<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function company(){

        return $this->hasOne('App\Company');
    
    }

    public function requests(){

        return $this->hasMany('App\Request');
    
    }

    public function entity(){

        return $this->belongsTo('App\Entity');
    
    }

    public function services(){

        return $this->hasMany('App\Service');
    
    }

    public function reviews(){

        return $this->hasMany('App\Review');
    
    }

    public function likes(){

        return $this->hasMany('App\Like');
    
    }

    public function comments(){

        return $this->hasMany('App\Comment');
    
    }

    public function albums(){

        return $this->hasMany('App\Album');
    
    }

    public function images(){

        return $this->hasMany('App\Image');
    
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

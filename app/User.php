<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','is_active','picture_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //establishing relationship between user and role tables
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
     public function photo()
     {
         return $this->belongsTo('App\Photo');

     }
}

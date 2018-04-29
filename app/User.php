<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post() {
        return $this->hasOne('App\Post'); //hasone relation 
    }

    public function posts() {
        return $this->hasMany('App\post');
    }

    //..Note.. add defferent parameters 
    //         ('App\Role', 'Table_name', 'Key_name')
    //         ('App\Role', 'user_roles', 'user_id', 'role_id')
    public function roles() {
        return $this->belongsToMany('App\Role')->withPivot('created_at');
    }

    public function photos() {
        return $this->morphMany('App\Photo', 'imageable');
    }
}

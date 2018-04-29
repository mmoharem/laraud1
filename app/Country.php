<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function posts() {
        //            ('App\Post', 'App\user', 'country_id', 'user_id')
        return $this->hasManyThrough('App\Post', 'App\user');
    }
}

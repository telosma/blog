<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    
    public function followers()
    {
        return $this->belongsToMany('App\User','followers');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post','user_id');
    }
}

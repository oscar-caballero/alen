<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'channels';
    
    public function users()
    {
        return $this->belongsToMany('App\User','users_channels');
    }
}

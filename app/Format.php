<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $table = 'formats';
    
    public function users()
    {
        return $this->belongsToMany('App\User','users_formats');
    }
}

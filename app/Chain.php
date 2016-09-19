<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chain extends Model
{
    protected $table = 'chains';
    
    public function users()
    {
        return $this->belongsToMany('App\User','users_chains');
    }
    
    public function launches()
    {
        return $this->hasMany('App\Launch','chain_id');
    }
}

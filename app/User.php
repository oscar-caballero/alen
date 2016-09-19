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
        'username', 'email', 'password', 'name','last_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function chains()
    {
        return $this->belongsToMany('App\Chain','users_chains');
    }
    
    public function channels()
    {
        return $this->belongsToMany('App\Channel','users_channels');
    }
    
    public function formats()
    {
        return $this->belongsToMany('App\Format','users_formats');
    }
    
    public function categories()
    {
        return $this->belongsToMany('App\Category','users_categories');
    }
}

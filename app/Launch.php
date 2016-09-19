<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Launch extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'launches';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'presentation', 'launch_date','description','image'];
    
    
    public function chains()
    {
        return $this->belongsTo('App\Chain');
    }
    
}

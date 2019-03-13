<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'seasons';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'season_id');
    }

}

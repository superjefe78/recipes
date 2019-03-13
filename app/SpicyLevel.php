<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpicyLevel extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'spicy_level';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'spicy_level_id');
    }
}

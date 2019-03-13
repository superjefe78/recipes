<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likeability extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'likeability';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'likeability_id');
    }
}

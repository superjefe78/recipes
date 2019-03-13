<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DifficultyLevel extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'difficulty_level';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'difficulty_level_id');
    }
}

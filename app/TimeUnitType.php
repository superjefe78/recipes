<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeUnitType extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'time_unit_type';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipesCookingTime()
    {
        return $this->hasMany('App\Recipe','id', 'cooking_time_unit_type_id');
    }
    public function recipesPreparationTime()
    {
        return $this->hasMany('App\Recipe','id', 'preparation_time_unit_type_id');
    }
}

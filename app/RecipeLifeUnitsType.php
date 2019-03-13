<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeLifeUnitsType extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'recipe_life_units';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'recipe_life_units_id');
    }
}

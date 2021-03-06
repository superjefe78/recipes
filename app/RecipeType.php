<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeType extends Model
{
    protected $connection = 'mysql';
    protected $table = 'recipe_types';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'recipe_type_id');
    }
}

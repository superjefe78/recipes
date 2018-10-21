<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
    protected $connection = 'mysql';
    protected $table = 'recipe_ingredients';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
}

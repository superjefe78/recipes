<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $connection = 'mysql';
    protected $table = 'recipes';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
    public function recipeType()
    {
        return $this->belongsTo('App\RecipeType','recipe_type_id','id');
    }
    public function season()
    {
        return $this->belongsTo('App\Season','season_id','id');
    }
    public function cookingTimeUnitType()
    {
        return $this->belongsTo('App\TimeUnitType','cooking_time_unit_type_id','id');
    }
    // public function cookingTimeUnitType()
    // {
    //     return $this->belongsTo('App\CookingTimeUnitType','cooking_time_unit_type_id','id');
    // }
    public function difficultyLevel()
    {
        return $this->belongsTo('App\DifficultyLevel','difficulty_level_id','id');
    }
    public function image()
    {
        return $this->belongsTo('App\Image','image_id','id');
    }
    public function likeability()
    {
        return $this->belongsTo('App\Likeability','likeability_id','id');
    }
    public function mealType()
    {
        return $this->belongsTo('App\MealType','meal_type_id','id');
    }
    public function preparationTimeUnitType()
    {
        return $this->belongsTo('App\TimeUnitType','preparation_time_unit_type_id','id');
    }
    public function recipeLifeUnitType()
    {
        return $this->belongsTo('App\TimeUnitType','recipe_life_unit_type_id','id');
    }
    public function spicyLevel()
    {
        return $this->belongsTo('App\SpicyLevel','spicy_level_id','id');
    }
}

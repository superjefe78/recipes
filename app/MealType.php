<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MealType extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'meal_type';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'meal_type_id');
    }
}

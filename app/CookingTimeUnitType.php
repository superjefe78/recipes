<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CookingTimeUnitType extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'cooking_time_unit_type';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'cooking_time_unit_type_id');
    }
}

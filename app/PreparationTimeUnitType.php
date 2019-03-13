<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreparationTimeUnitType extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'preparation_time_unit_type';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'preparation_time_unit_type_id');
    }

}

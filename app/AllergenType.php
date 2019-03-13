<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AllergenType extends Model
{
    //
    protected $connection = 'mysql';
    protected $table = 'allergen_type';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
        
    public function recipes()
    {
        return $this->hasMany('App\Recipe','id', 'allergen_type_id');
    }
}

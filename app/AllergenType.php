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
        
    // public function ingredients()
    // {
    //     return $this->hasMany('App\Ingredients','id', 'allergen_type_id');
    // }
}

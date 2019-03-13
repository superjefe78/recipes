<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientTypes extends Model
{
    protected $connection = 'mysql';
    protected $table = 'ingredient_type';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];

    public function ingredients()
    {
        return $this->belongsTo('ingredients');
    }
}

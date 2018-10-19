<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $connection = 'mysql';
    protected $table = 'ingredients';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    protected $connection = 'mysql';
    protected $table = 'shopping_lists';
    
    // protected $fillable = ['title', 'body'];
    protected $guarded = [];
}

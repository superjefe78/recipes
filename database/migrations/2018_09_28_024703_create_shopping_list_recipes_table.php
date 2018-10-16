<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingListRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_list_recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shopping_list_id')->unsigned();
            $table->integer('recipe_id')->unsigned()->nullable();
            $table->decimal('regular_servings')->unsigned()->nullable();
            $table->decimal('proportional_servings')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_list_recipes');
    }
}

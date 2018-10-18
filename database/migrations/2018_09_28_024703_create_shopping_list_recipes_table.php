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
            $table->integer('shopping_list_id');
            $table->integer('recipe_id')->nullable();
            $table->decimal('regular_servings')->nullable();
            $table->decimal('proportional_servings')->nullable();
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

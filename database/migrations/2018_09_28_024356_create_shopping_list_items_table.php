<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingListItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_list_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shopping_list_id');
            $table->integer('recipe_id')->nullable();
            $table->integer('item_type_id');
            $table->integer('ingredient_id')->nullable();
            $table->integer('utensil_id')->nullable();
            $table->decimal('units_needed')->nullable();
            $table->decimal('proportional_units_needed')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_list_items');
    }
}

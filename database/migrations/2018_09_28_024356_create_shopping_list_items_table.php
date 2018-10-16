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
            $table->integer('shopping_list_id')->unsigned();
            $table->integer('list_item_type_id')->unsigned();
            $table->integer('ingredient_id')->unsigned()->nullable();
            $table->integer('utensil_id')->unsigned()->nullable();
            $table->integer('recipe_id')->unsigned()->nullable();
            $table->integer('pur_unit_type')->unsigned()->nullable();
            $table->decimal('units_needed')->unsigned()->nullable();
            $table->decimal('proportional_units_needed')->unsigned()->nullable();
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

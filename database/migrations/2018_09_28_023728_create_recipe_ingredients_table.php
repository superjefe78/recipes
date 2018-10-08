<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('recipe_id')->unsigned()->nullable();
            $table->integer('ingredient_id')->unsigned()->nullable();
            $table->integer('measuring_units')->unsigned()->nullable();
            $table->integer('measuring_unit_type')->unsigned()->nullable();
            $table->integer('prep_presentation_type')->unsigned()->nullable();
            $table->integer('prep_presentation_units')->unsigned()->nullable();
            $table->integer('prep_presentation_measuring_unit_type')->unsigned()->nullable();
            $table->string('tags')->nullable();
            $table->string('notes')->nullable();
            $table->string('comments')->nullable();
            $table->integer('image')->unsigned()->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_ingredients');
    }
}

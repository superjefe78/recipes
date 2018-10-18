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
            $table->increments('id');
            $table->integer('recipe_id')->nullable();
            $table->integer('ingredient_id')->nullable();
            $table->decimal('measuring_units')->nullable();
            $table->integer('measuring_unit_type_id')->nullable();
            $table->decimal('prep_presentation_units')->nullable();
            $table->integer('prep_presentation_type_id')->nullable();
            $table->decimal('prep_presentation_measuring_units')->nullable();
            $table->integer('prep_presentation_measuring_unit_type_id')->nullable();
            $table->integer('proportial_scale_id')->nullable();
            $table->string('tags')->nullable();
            $table->string('notes')->nullable();
            $table->string('comments')->nullable();
            $table->integer('image_id')->nullable();            
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

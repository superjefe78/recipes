<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('long_name')->nullable();
            $table->integer('recipe_type')->unsigned();
            $table->integer('meal_type')->unsigned();
            $table->boolean('seasonal')->nullable();
            $table->integer('season')->unsigned()->nullable();
            $table->integer('spicy_level')->unsigned()->nullable();
            $table->integer('likeability')->unsigned()->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
            $table->integer('preparation_time_units')->unsigned()->nullable();
            $table->integer('preparation_time_unit_type')->unsigned()->nullable();
            $table->integer('cooking_time_units')->unsigned()->nullable();
            $table->integer('cooking_time_unit_type')->unsigned()->nullable();
            $table->integer('recipe_life_units')->unsigned()->nullable();
            $table->integer('recipe_life_unit_type')->unsigned()->nullable();

            $table->integer('number_of_servings')->unsigned()->nullable();

            $table->decimal('people_served')->unsigned()->nullable();
            $table->decimal('people_per_serving')->unsigned()->nullable();

            $table->integer('serving_cals')->unsigned()->nullable();
            $table->decimal('total_servings_cals')->unsigned()->nullable();

            $table->boolean('perishable')->nullable();
            $table->boolean('refrigerate')->nullable();
            $table->date('expiration_date')->nullable();

            $table->boolean('allergen')->nullable();
            $table->string('allergen_type')->nullable();
            $table->boolean('tags')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}

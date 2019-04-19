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
            $table->integer('recipe_type_id');
            $table->integer('meal_type_id');
            $table->boolean('seasonal')->nullable();
            $table->integer('season_id')->nullable();
            $table->integer('spicy_level_id')->nullable();
            $table->integer('likeability_id')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
            $table->decimal('preparation_time_units')->nullable();
            $table->integer('preparation_time_unit_type_id')->nullable();
            $table->decimal('cooking_time_units')->nullable();
            $table->integer('cooking_time_unit_type_id')->nullable();
            $table->integer('difficulty_level_id')->nullable();
            $table->integer('recipe_life_units')->nullable();
            $table->integer('recipe_life_unit_type_id')->nullable();

            $table->decimal('servings_per_recipe')->nullable();
            $table->decimal('people_fed_per_serving')->nullable();

            $table->decimal('cals_per_serving')->nullable();
            $table->decimal('total_cals_per_recipe')->nullable();

            $table->boolean('perishable')->nullable();
            $table->boolean('refrigerate')->nullable();
            $table->date('expiration_date')->nullable();

            $table->boolean('allergen')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}

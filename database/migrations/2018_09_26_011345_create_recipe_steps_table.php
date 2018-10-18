<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_steps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_id')->nullable();
            $table->integer('ingredient_id')->nullable();
            $table->integer('utensil_id')->nullable();
            $table->string('name')->nullable();
            $table->string('long_name')->nullable();
            $table->integer('step_type_id')->nullable();
            $table->integer('action_id')->nullable();
            $table->integer('action_type_id')->nullable();
            $table->boolean('repeat')->nullable();
            $table->decimal('repeat_times')->nullable();
            $table->integer('step_nbr')->nullable();
            $table->integer('sub_step_nbr')->nullable();
            $table->integer('action_intensity_id')->nullable();
            $table->decimal('action_units')->nullable();
            $table->integer('action_unit_type_id')->nullable();
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
        Schema::dropIfExists('recipe_steps');
    }
}

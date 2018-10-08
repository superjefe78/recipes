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
            $table->integer('recipe_id')->unsigned()->nullable();
            $table->integer('ingredient_id')->unsigned()->nullable();
            $table->integer('utensil_id')->unsigned()->nullable();
            $table->integer('step_type_id')->unsigned()->nullable();
            $table->integer('action_id')->unsigned()->nullable();
            $table->integer('action_type_id')->unsigned()->nullable();
            $table->integer('step_nbr')->unsigned()->nullable();
            $table->integer('sub_step_nbr')->unsigned()->nullable();
            $table->integer('action_intensity_id')->unsigned()->nullable();
            $table->integer('action_units')->unsigned()->nullable();
            $table->integer('action_unit_type')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->boolean('repeat')->unsigned()->nullable();
            $table->decimal('repeat_times')->unsigned()->nullable();
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
        Schema::dropIfExists('recipe_steps');
    }
}

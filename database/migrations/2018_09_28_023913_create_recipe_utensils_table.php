<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeUtensilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_utensils', function (Blueprint $table) {
            $table->increments('id');           
            $table->integer('recipe_id')->nullable();            
            $table->integer('utensil_id');
            $table->decimal('units_needed')->nullable();
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
        Schema::dropIfExists('recipe_utensils');
    }
}

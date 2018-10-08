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
            
            $table->string('name');
            $table->string('long_name')->nullable();
            $table->integer('utensil_type')->unsigned();
            $table->integer('likeability')->unsigned()->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
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
        Schema::dropIfExists('recipe_utensils');
    }
}

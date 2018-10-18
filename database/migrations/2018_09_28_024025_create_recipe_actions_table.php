<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_actions', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name');
            $table->string('long_name')->nullable();
            $table->integer('likeability_id')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
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
        Schema::dropIfExists('recipe_actions');
    }
}

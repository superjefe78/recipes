<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_type', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('ingredient_type_text');
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
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
        Schema::table('ingredient_type', function (Blueprint $table) {
            //
            Schema::dropIfExists('ingredient_type');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('long_name')->nullable();
            $table->integer('ingredient_type_id')->nullable();

            $table->integer('presentation_type_id')->nullable();
            $table->integer('purchasing_unit_type_id')->nullable();

            $table->integer('spicy_level_id')->nullable();
            $table->integer('likeability_id')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();

            $table->integer('last_purchase_store_id')->nullable();
            $table->double('last_purchase_paid_price',6,2)->nullable();
            $table->string('last_purchase_brand_id')->nullable();
            $table->dateTime('last_purchase_ts')->nullable();

            $table->integer('prefered_purchase_store_id')->nullable();
            $table->double('prefered_purchase_paid_price',6,2)->nullable();
            $table->string('prefered_purchase_brand_id')->nullable();
            $table->dateTime('prefered_purchase_ts')->nullable();
            
            $table->boolean('perishable')->nullable();
            $table->boolean('refrigerate')->nullable();

            $table->integer('shelf_life_units')->nullable();
            $table->integer('shelf_life_unit_type_id')->nullable();

            $table->boolean('allergen')->nullable();
            $table->string('allergen_type_id')->nullable();
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
        Schema::dropIfExists('ingredients');
    }
}

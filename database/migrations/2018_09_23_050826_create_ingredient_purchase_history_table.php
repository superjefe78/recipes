<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientPurchaseHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_purchase_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredient_id');
            $table->integer('store_id')->nullable();
            $table->decimal('paid_price',6,2)->nullable();
            $table->integer('brand_id')->nullable();
            $table->dateTime('purchase_ts');
            $table->integer('product_rating_id')->nullable();
            $table->integer('store_rating_id')->nullable();
            $table->integer('brand_rating_id')->nullable();
            $table->integer('price_rating_id')->nullable();
            $table->string('prefered_purchase_brand_id')->nullable();
            $table->dateTime('prefered_purchase_ts')->nullable();
            
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
        Schema::dropIfExists('ingredient_purchase_history');
    }
}

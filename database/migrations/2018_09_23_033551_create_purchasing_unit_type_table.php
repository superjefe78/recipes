<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasingUnitTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchasing_unit_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('purchasing_unit_name');
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
        Schema::dropIfExists('purchasing_unit_type');
    }
}

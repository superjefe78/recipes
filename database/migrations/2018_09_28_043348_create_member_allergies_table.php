<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberAllergiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_allergies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id');
            $table->integer('ingredient_id');
            $table->integer('allergy_intensity_id');
            $table->boolean('substitute_ok');
            $table->integer('sub_ingredient_id_1');
            $table->integer('sub_ingredient_id_2');
            $table->integer('sub_ingredient_id_3');
            $table->integer('sub_ingredient_id_4');
            $table->integer('sub_ingredient_id_5');
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
        Schema::dropIfExists('member_allergies');
    }
}

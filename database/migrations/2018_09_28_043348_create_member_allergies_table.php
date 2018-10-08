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
            $table->string('member_id');
            $table->string('ingredient_id');
            $table->string('allergy_intensity');
            $table->boolean('substitude_ok');
            $table->string('sub_ingredient_id_1');
            $table->string('sub_ingredient_id_2');
            $table->string('sub_ingredient_id_3');
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

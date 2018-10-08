<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepTypesTable extends Migration
{
    /**
     * Run the migrations.
     * like a prep step vs cooking etc
     * @return void
     */
    public function up()
    {
        Schema::create('step_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('step_type_text');
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
        Schema::dropIfExists('step_type');
    }
}

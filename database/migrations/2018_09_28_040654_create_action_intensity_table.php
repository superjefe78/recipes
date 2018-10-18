<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionIntensityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_intensity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action_intensity_text')->nullable();
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
        Schema::dropIfExists('action_intensity');
    }
}

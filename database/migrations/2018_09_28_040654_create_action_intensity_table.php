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
            // $table->integer('action_intensity_id')->unsigned()->nullable();
            $table->string('action_intensity_text')->nullable();
            $table->integer('action_id')->unsigned()->nullable();
            $table->integer('action_type_id')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('action_intensity');
    }
}

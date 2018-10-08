<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHouseholdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_household_member', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('long_name')->nullable();
            $table->integer('member_type_id')->unsigned();
            $table->integer('difficulty_level')->unsigned()->nullable();
            $table->integer('member_age_units')->unsigned()->nullable();
            $table->integer('member_age_unit_type')->unsigned()->nullable();

            $table->boolean('allergic')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('user_household_member');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PopulateIngredients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('ingredients', function (Blueprint $table) {
            $table->string('ing_name')->after('id');
            $table->string('ing_long_name')->after('ing_name');
            $table->integer('ing_type')->after('ing_long_name');
            $table->integer('ing_hotness')->after('ing_type');
            $table->integer('ing_likeability')->after('ing_hotness');
            $table->integer('ing_presentation_type')->after('ing_likeability');
            $table->integer('ing_shelf_life_days')->after('ing_presentation_type');
            $table->integer('ing_latest_pur_store')->after('ing_shelf_life_days');
            $table->double('ing_latest_pur_paid_price',6,2)->after('ing_latest_pur_store');
            $table->dateTime('ing_latest_pur_ts')->after('ing_latest_pur_paid_price');
            $table->integer('ing_best_pur_store')->after('ing_latest_pur_ts');
            $table->double('ing_best_pur_paid_price',6,2)->after('ing_best_pur_store');
            $table->dateTime('ing_best_pur_ts')->after('ing_best_pur_paid_price');
            $table->boolean('perishable')->after('ing_best_pur_ts');
            $table->string('tags')->after('perishable');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('ingredients', function (Blueprint $table) {
            $table->dropColumn(['ing_name','ing_type','ing_hotness','ing_likeability','ing_presentation_type','ing_shelf_life_days','ing_latest_pur_store','ing_latest_pur_paid_price','ing_latest_pur_ts','ing_best_pur_store','ing_best_pur_paid_price','ing_best_pur_ts']);
        });
    }
}

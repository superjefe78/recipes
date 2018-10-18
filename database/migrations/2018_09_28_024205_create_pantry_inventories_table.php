<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePantryInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantry_inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('pantry_id');
            $table->integer('item_type_id');
            $table->integer('ingredient_id');
            $table->integer('utensil_id');
            $table->integer('expiration_date');
            $table->decimal('unit_count');
            $table->boolean('perishable')->nullable();
            $table->boolean('expiring_soon')->nullable();
            $table->string('tags')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('pantry_inventory');
    }
}

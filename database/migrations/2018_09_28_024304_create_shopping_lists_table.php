<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('status_id');
            $table->string('name')->nullable();
            $table->string('long_name')->nullable();
            $table->decimal('percent_completed')->nullable();
            $table->date('planned_shopping_date')->nullable();
            $table->date('actual_shopping_date')->nullable();
            $table->decimal('max_budget_amt')->nullable();
            $table->decimal('planned_spend_amt')->nullable();
            $table->decimal('actual_spent_amt')->nullable();
            $table->integer('likeability_id')->nullable();
            $table->integer('likes')->nullable();
            $table->integer('dislikes')->nullable();
            $table->string('tags')->nullable();
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
        Schema::dropIfExists('shopping_lists');
    }
}

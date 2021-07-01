<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodpairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodpairs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_food_name');
            $table->string('second_food_name');
            $table->integer('cat_id');
            //$table->string('first_food_image')->nullable();
           /// $table->string('second_food_image')->nullable();
           // $table->string('happen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foodpairs');
    }
}

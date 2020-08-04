<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('mealName');
            $table->string('mealName_ar');
            $table->string('image');
            $table->text('description');
            $table->double('price');
            $table->double('tax');
            $table->boolean('public');
            $table->integer('screen_id');
            $table->string('day_prg');
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
        Schema::dropIfExists('meals');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealCookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voiintegerd
     */
    public function up()
    {
        Schema::create('meal_cook', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameAr');
            $table->integer('nOrder');
            $table->integer('idOrder');
            $table->integer('idMeal');
            $table->string('qnt');
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
        Schema::dropIfExists('meal_cook');
    }
}

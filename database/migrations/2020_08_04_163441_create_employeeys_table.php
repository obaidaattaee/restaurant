<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeys', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('restaurant_id');
            $table->string('nameEmployee');
            $table->string('tel');
            $table->string('type');
            $table->boolean('active');
            $table->string('image');
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
        Schema::dropIfExists('employeeys');
    }
}

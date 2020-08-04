<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCompletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_completed', function (Blueprint $table) {
            $table->id();
            $table->integer('nOrder');
            $table->integer('customer_id');
            $table->integer('promo_id');
            $table->integer('caisse_id');
            $table->integer('taux');
            $table->string('orderType');
            $table->string('orderStatus');
            $table->integer('priceOrder');
            $table->string('paymentStatus');
            $table->string('paymentMethode');
            $table->json('order_meals');
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
        Schema::dropIfExists('order_completed');
    }
}

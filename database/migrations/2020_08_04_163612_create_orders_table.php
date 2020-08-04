<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('caisse_id');
            $table->string('orderType');
            $table->double('priceOrder');
            $table->integer('id_customer');
            $table->double('taux');
            $table->double('dawla');
            $table->integer('promo_id');
            $table->integer('delivery_company_id');
            $table->integer('employee_id');

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
        Schema::dropIfExists('orders');
    }
}

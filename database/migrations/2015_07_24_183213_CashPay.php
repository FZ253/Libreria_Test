<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CashPay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_pays', function (Blueprint $table) {
            $table->integer('id_cart');
            $table->string('payer_DNI');
            $table->string('payer_name');
            $table->string('payer_last_name');
            $table->string('status')->default('to pay');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cashPay', function (Blueprint $table) {
            //
        });
    }
}

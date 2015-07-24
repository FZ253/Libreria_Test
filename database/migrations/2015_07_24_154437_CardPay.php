<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CardPay extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_pays', function (Blueprint $table) {
            $table->integer('id_cart');
            $table->string('cardNo');
            $table->string('status')->default('to discount');
            //Asumiendo tarjeta de débito (Descuento en otra fecha por lo general)
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
    }
}

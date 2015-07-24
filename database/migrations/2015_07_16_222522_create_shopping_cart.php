<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->timestamp('bought_at');
            $table->float('price');
            $table->string('status')->default('to send');
            /*
            Estados:
            - to send
            - sent (Se inserta tras hacer el pago [cŕedito] o se confirma el pago [efectivo])
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
}

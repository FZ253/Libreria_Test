<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integer('id_cart');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('DNI');
            $table->string('telefono');
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('tipo_pago');
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

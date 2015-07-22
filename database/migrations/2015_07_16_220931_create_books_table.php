<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isbn')->unique();
            $table->integer('cantidad');
            $table->string('titulo');
            $table->string('autor');
            $table->string('proveedor');
            $table->string('edicion');
            $table->string('editorial');
            $table->string('genero');
            $table->string('pais');
            $table->string('moneda');
            $table->float('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}

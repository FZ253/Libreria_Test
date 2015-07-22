<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationBooksCarts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookscarts', function (Blueprint $table) {
            $table->integer('isbn');
            $table->integer('id_cart');
            $table->timestamp('added_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookscarts', function (Blueprint $table) {
            //
        });
    }
}

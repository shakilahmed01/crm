<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddTOcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_t_ocarts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('usernumber');
            $table->string('quantity');
            $table->string('price');
            $table->string('from');
            $table->string('to');
            $table->string('booked_price');
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
        Schema::dropIfExists('add_t_ocarts');
    }
}

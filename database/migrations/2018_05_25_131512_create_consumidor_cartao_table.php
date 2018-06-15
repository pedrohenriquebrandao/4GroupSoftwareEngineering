<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorCartaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor_cartao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('validade', 8);
            $table->tinyInteger('codCartao');
            $table->tinyInteger('numCartao');
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
        Schema::drop('consumidor_cartao');
    }


}

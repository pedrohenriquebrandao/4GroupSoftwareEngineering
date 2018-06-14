<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('consumidor_pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyint('finalizado');
            $table->tinyint('pendente');
            $table->tinyint('cancelado');
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
        Schema::drop('consumidor_pedido');
    }


}

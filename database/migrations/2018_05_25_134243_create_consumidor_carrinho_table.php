<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorCarrinhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor_carrinho', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id');
            $table->integer('produto_id');
            $table->foreign('usuario_id')->references('id')->on('consumidor_usuarios')->onDelete('cascade');
            $table->foreign('produto_id')->references('id')->on('produtor_produto')->onDelete('cascade');
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
        Schema::drop('consumidor_carrinho');
    }


}

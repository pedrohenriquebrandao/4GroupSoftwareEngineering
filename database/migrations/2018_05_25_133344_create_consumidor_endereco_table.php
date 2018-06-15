<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorEnderecoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor_endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('cep');
            $table->string('rua');
            $table->string('bairro');
            $table->tinyInteger('numero');
            $table->string('complemento');
            $table->string('referencia');
            $table->string('cidade');
            $table->string('estado');
            $table->string('zona');
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
        Schema::drop('consumidor_endereco');
    }


}

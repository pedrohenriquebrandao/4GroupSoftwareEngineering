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
            $table->string('rua');
            $table->string('bairro');
            $table->string('cep');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('complemento')->nullable();
            $table->string('zona');
            $table->integer('login_id')->unsigned()->nullable();
            $table->foreign('login_id')->references('id')->on('consumidor_login')->onDelete('cascade');
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

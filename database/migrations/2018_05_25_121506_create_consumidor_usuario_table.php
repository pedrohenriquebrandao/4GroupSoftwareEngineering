<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf')->unique();
            $table->string('nome');
            $table->string('sexo', 10);
            $table->string('telefone', 10);
            $table->integer('login_id')->unsigned();
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
        Schema::drop('consumidor_usuarios');
    }

}

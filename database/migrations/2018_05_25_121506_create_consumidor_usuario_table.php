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
        Schema::create('consumidor_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('telefone', 10);
            $table->string('nascimento', 8);
            $table->string('sexo', 10);
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
        Schema::drop('consumidor_usuario');
    }

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpf', 11);
            $table->date('dtNascimento');
            $table->integer('endereco_id')->nullable();
            $table->foreign('endereco_id')->references('id')->on('consumidor_endereco');
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
        Schema::drop('consumidor');
    }

}

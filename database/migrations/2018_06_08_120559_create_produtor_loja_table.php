<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorLojaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtor_loja', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cnpj')->unsigned();
            $table->string('nome');
            $table->integer('id_produtor');
            $table->foreign('id_produtor')->references('id')->on('produtor');
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
        Schema::drop('produtor_loja');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorAssinaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtor_assinatura', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor');
            $table->date('duracao');
            $table->float('frete');
            $table->string('promocao');
            $table->date('data_assinatura');
            $table->enum('status', ['Disponível', 'Não Disponível']);
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
        Schema::drop('produtor_assinatura');
    }
}

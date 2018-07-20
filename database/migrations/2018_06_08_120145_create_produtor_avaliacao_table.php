<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorAvaliacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtor_avaliacao', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo', ['Pessimo', 'Ruim', 'Medio', 'Bom', 'Ótimo']);
            $table->text('feedback')->nullable();
            $table->integer('id_produto');
            $table->integer('id_usuario');
            $table->foreign('id_produto')->references('id')->on('produtor_produto');
            $table->foreign('id_usuario')->references('id')->on('consumidor_login');
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
        Schema::drop('produtor_avaliacao');
    }
}

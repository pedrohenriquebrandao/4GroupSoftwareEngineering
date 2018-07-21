<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtor_comentario', function (Blueprint $table) {
            $table->increments('id');
            $table->text('feedback');
            $table->integer('id_produto');
            $table->integer('id_login');
            $table->foreign('id_produto')->references('id')->on('produtor_produto');
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
        Schema::drop('produtor_comentario');
    }
}

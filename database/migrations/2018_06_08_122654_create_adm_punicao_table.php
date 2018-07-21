<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmPunicaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_punicao', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dataInicio');
            $table->date('dataFinal');
            $table->text('descricao');
            $table->integer('id_adm');
            $table->integer('id_usuario');
            $table->foreign('id_adm')->references('id')->on('adm_administrador');
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
        Schema::drop('adm_punicao');
    }
}

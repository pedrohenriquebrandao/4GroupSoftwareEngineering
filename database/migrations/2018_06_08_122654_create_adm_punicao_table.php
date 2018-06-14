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
            $table->string('email_usuario');
            $table->string('email_administrador');
            $table->string('tipo');
            $table->string('data_inicial');
            $table->string('data_final');
            $table->string('descricao');
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

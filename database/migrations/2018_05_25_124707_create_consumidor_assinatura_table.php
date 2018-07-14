<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorAssinaturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor_assinatura', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dataDeAssinatura', 8);
            $table->float('preco');
            $table->string('status');
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
        Schema::drop('consumidor_assinatura');
    }


}

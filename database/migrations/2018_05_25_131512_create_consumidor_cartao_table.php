<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumidorCartaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumidor_cartao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titular');
            $table->date('validade');
            $table->integer('codCartao');
            $table->integer('numCartao')->unsigned();
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
        Schema::drop('consumidor_cartao');
    }


}

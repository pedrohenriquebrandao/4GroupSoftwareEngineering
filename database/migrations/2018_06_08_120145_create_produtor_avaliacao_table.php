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
            $table->integer('ruim')->unsigned();
            $table->integer('pessimo')->unsigned();
            $table->integer('mediano')->unsigned();
            $table->integer('bom')->unsigned();
            $table->integer('otimo')->unsigned();
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

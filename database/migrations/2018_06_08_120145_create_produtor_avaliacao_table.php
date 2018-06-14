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
            $table->tinyint('ruim');
            $table->tinyint('pessimo');
            $table->tinyint('mediano');
            $table->tinyint('bom');
            $table->tinyint('otimo');
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

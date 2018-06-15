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
            $table->tinyInteger('ruim');
            $table->tinyInteger('pessimo');
            $table->tinyInteger('mediano');
            $table->tinyInteger('bom');
            $table->tinyInteger('otimo');
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

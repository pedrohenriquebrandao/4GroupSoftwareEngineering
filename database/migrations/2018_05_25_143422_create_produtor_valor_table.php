<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutorValorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
        Schema::create('produtor_valor', function (Blueprint $table) {
            $table->increments('id');
            $table->float('quilo');
            $table->float('quilo_ promocao');
            $table->float('unidade');
            $table->float('unidade_promocao');
            $table->float('caixa');
            $table->float('caixa_promocao');
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
        Schema::drop('produtor_valor');
    }

}

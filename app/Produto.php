<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'tipo',
        'qtd_frete_gratis',
        'imagem'
    ];

    protected $table = 'produtor_produto';
}
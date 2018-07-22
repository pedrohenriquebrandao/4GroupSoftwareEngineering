<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valor extends Model
{
    protected $fillable = [
        'id',
        'quilo',
        'quilo_ promocao',
        'unidade',
        'unidade_promocao',
        'caixa',
        'caixa_promocao',
    ];

    protected $table = 'produtor_valor';
}

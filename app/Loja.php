<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = [
        'id',
        'cnpj',
        'nome'
    ];

    protected $table = 'produtor_loja';
}

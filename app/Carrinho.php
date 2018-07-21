<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable = [
        'id',
        'usuario_id',
        'produto_id'
    ];

    protected $table = 'consumidor_carrinho';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'validade',
        'codCartao',
        'numCartao',
        'login_id'
    ];

    protected $table = 'consumidor_cartao';
}
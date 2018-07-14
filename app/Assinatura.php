<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assinatura extends Model
{
    protected $fillable = [
        'id',
        'dataDeAssinatura',
        'preco',
        'status',
        'login_id'
    ];

    protected $table = 'consumidor_assinatura';
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punicao extends Model
{
    protected $fillable = [
        'id',
        'email_usuario',
        'email_administrador',
        'tipo',
        'data_inicial',
        'data_final',
        'descricao'
    ];

    protected $table ='adm_punicao';
}

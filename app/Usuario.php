<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Usuario as Authenticatable;

class Usuario extends Model
{
    protected $fillable = [
        'id',
        'cpf',
        'nome',
        'email',
        'sexo',
        'telefone',
        'login_id'
    ];

    protected $table = 'usuarios';
}
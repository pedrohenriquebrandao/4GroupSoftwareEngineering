<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable; //Necessário para autenticação(Login)

    protected $guard = 'admin';

    protected $fillable = [
        'id',
        'email',
        'senha',
        'nome',
        'telefone'
    ];

    protected $table = 'adm_administrador';
}
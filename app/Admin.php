<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Auth;

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